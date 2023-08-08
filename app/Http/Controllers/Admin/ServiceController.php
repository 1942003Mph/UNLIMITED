<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $services = services::latest('id')
            ->where('titleserv', 'like', '%' . $request->search . '%')
            ->paginate(20);
        }else {
            $services = services::latest('id')->paginate(20);
        }

        return view('admin.services.index' , compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.services.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($_POST);
        $request->validate([
            'description'   => 'required',
            'titleserv'      => 'required',
            'maintitle'      => 'required',
            'image'         => 'required',
        ]);

        $img_name = time().rand().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $img_name);

        
        services::create([
            'description'   => $request->description,
            'maintitle'      => $request->maintitle,
            'titleserv'      => $request->titleserv,
            'image'         => $img_name,
        ]);

        return redirect()
        ->route('admin.services.index')
        ->with('msg', 'services added successfully')
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
        $services = services::find($id);
        return view('admin.services.edit',  compact('services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'description'   => 'required',
            'maintitle'      => 'required',
            'titleserv'      => 'required',
            // 'image'         => 'required',
             ]) ;
        // dd($_POST['image']);
        $services = services::find($id);

        $img_name = $services->image;
        if($request->hasFile('image')) {
            File::delete(public_path('uploads/'.$services->image));
            $img_name = time().rand().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $img_name);
            $services->image = $img_name;
        }
 
        
         $services->update([
             'description' =>$request->description,
             'image'       =>$img_name,
             'maintitle'   =>$request->maintitle,
             'titleserv'   =>$request->titleserv,
             'status'   =>$request->status,
         ]);
         return redirect()
         ->route('admin.services.index')
         ->with('msg', 'Woks updated successfully')
         ->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $services = services::find($id);
        File::delete(public_path('uploads/'.$services->image));
        $services->delete();

        return redirect()
        ->route('admin.services.index')
        ->with('msg', 'services Deleted successfully')
        ->with('type', 'danger');
    }
}
