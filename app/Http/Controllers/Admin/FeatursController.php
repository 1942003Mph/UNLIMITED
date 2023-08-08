<?php

namespace App\Http\Controllers\Admin;

use App\Models\featur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class FeatursController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $featurs = featur::latest('id')
            ->where('title', 'like', '%' . $request->search . '%')
            ->paginate(20);
        }else {
            $featurs = featur::latest('id')->paginate(20);
        }

        
        return view('Admin.featurs.index' , compact('featurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.featurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       	
        // dd($_POST);
        $request->validate([
            'description'   => 'required',
            'title'      => 'required',
            'image'         => 'required',
        ]);

        $img_name = time().rand().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $img_name);

        
        featur::create([
            'description'   => $request->description,
            'title'      => $request->title,
            'image'         => $img_name,
        ]);

        return redirect()
        ->route('admin.featurs.index')
        ->with('msg', 'featur added successfully')
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
        $featurs = featur::find($id);
        return view('admin.featurs.edit',  compact('featurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'description' =>'required',
            //  'image'      =>'required',
            'title'   =>'required',
             ]) ;
        // dd($_POST['image']);
        $featurs = featur::find($id);

        $img_name = $featurs->image;
        if($request->hasFile('image')) {
            File::delete(public_path('uploads/'.$featurs->image));
            $img_name = time().rand().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $img_name);
            $featurs->image = $img_name;
        }
 
        
         $featurs->update([
             'description' =>$request->description,
             'image'       =>$img_name,
             'title'   =>$request->title,
             'status'   =>$request->status,
         ]);
         return redirect()
         ->route('admin.featurs.index')
         ->with('msg', 'Woks updated successfully')
         ->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $featurs = featur::find($id);
        File::delete(public_path('uploads/'.$featurs->image));
        $featurs->delete();

        return redirect()
        ->route('admin.featurs.index')
        ->with('msg', 'featur Deleted successfully')
        ->with('type', 'danger');
    }
}
