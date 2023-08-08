<?php

namespace App\Http\Controllers\Admin;

use App\Models\setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class settingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
         if($request->has('search')) {
            $settings = setting::latest('id')
            ->where('name', 'like', '%' . $request->search . '%')
            ->paginate(20);
        }else {
            $settings = setting::latest('id')->paginate(20);
        }
        return view('admin.settings.index' , compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.settings.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       	
        // dd($_POST);
        $request->validate([
            'description'   => 'required',
            'name'      => 'required',
            'job'      => 'required',
            'image'         => 'required',
        ]);

        $img_name = time().rand().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $img_name);

        
        setting::create([
            'description'   => $request->description,
            'name'          => $request->name,
            'job'           => $request->job,
            'image'         => $img_name,
        ]);

        return redirect()
        ->route('admin.settings.index')
        ->with('msg', 'setting added successfully')
        ->with('type', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $settings = setting::find($id);
        return view('admin.settings.edit',  compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'description'   => 'required',
            'name'      => 'required',
            'job'      => 'required',
            // 'image'         => 'required',
             ]) ;
        // dd($_POST['image']);
        $settings = setting::find($id);

        $img_name = $settings->image;
        if($request->hasFile('image')) {
            File::delete(public_path('uploads/'.$settings->image));
            $img_name = time().rand().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $img_name);
            $settings->image = $img_name;
        }
 
        
         $settings->update([
             'description'  =>$request->description,
             'image'        =>$img_name,
             'job'          =>$request->job,
             'name'         =>$request->name,
             'status'           =>$request->status,
         ]);
         return redirect()
         ->route('admin.settings.index')
         ->with('msg', 'Woks updated successfully')
         ->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $settings = setting::find($id);
        File::delete(public_path('uploads/'.$settings->image));
        $settings->delete();

        return redirect()
        ->route('admin.settings.index')
        ->with('msg', 'setting Deleted successfully')
        ->with('type', 'danger');
    }
}
