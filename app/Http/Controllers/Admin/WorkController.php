<?php

namespace App\Http\Controllers\Admin;

use App\Models\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $works = Work::latest('id')
            ->where('titlework', 'like', '%' . $request->search . '%')
            ->paginate(20);
        }else {
            $works = Work::latest('id')->paginate(20);
        }
        return view('Admin.ourwork.index' , compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.ourwork.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($_POST);
        $request->validate([
            'maintitle'     => 'required',
            'titlework'     => 'required',
            'description'   => 'required',
            'likework'      => 'required',
            'image'         => 'required',
        ]);

        // $img_name = time().rand().$request->file('image')->getClientOriginalName();
        // $request->file('image')->move(public_path('uploads'), $img_name);
        // $fileName   = time() . rand() . $request->file('image')->getClientOriginalName();
        // Storage::disk('public')->put($request . $fileName, File::get($request->file('image')));
        $fileName = $request->file('image')->store('images', 'public');
        
        Work::create([
            'maintitle'     => $request->maintitle,
            'titlework'     => $request->titlework,
            'description'   => $request->description,
            'likework'      => $request->likework,
            'image'         => $fileName,
        ]);

        return redirect()
        ->route('admin.ourwork.index')
        ->with('msg', 'work added successfully')
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
        $works = Work::find($id);
        return view('admin.ourwork.edit',  compact('works'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'description'   =>'required',
            'titlework'    =>'required',
            'maintitle'     =>'required',
            'likework'      =>'required',
             ]) ;
        // dd($_POST['image']);
        $works = work::find($id);

        $img_name = $works->image;
        if($request->hasFile('image')) {
            File::delete(public_path('uploads/'.$works->image));
            $img_name = time().rand().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $img_name);
            $works->image = $img_name;
        }
 
        
         $works->update([
             'description'  =>$request->description,
             'image'        =>$img_name,
             'titlework'    =>$request->titlework,
             'maintitle'    =>$request->maintitle, 
             'likework'     =>$request->likework, 
             'status'       =>$request->status,
         ]);
         return redirect()
         ->route('admin.ourwork.index')
         ->with('msg', 'Woks updated successfully')
         ->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $works = work::find($id);
        File::delete(public_path('uploads/'.$works->image));
        $works->delete();

        return redirect()
        ->route('admin.ourwork.index')
        ->with('msg', 'work Deleted successfully')
        ->with('type', 'danger');
    }
}
