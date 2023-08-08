<?php

namespace App\Http\Controllers\Admin;

use App\Models\slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $sliders = slider::latest('id')
            ->where('title', 'like', '%' . $request->search . '%')
            ->paginate(20);
        }else {
            $sliders = slider::latest('id')->paginate(20);
        }
        return view('admin.sliders.index' , compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.sliders.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($_POST);
        $request->validate([
            'content'   => 'required',
            'title'      => 'required',
            'image'         => 'required',
        ]);

        $img_name = time().rand().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $img_name);

        slider::create([
            'content'   => $request->content,
            'title'      => $request->title,
            'image'         => $img_name,
        ]);

        return redirect()
        ->route('admin.sliders.index')
        ->with('msg', 'slider added successfully')
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
        $sliders = slider::find($id);
        return view('admin.sliders.edit',  compact('sliders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'content'   => 'required',
            'title'      => 'required',
            // 'image'         => 'required',
             ]) ;
        // dd($_POST);
        $sliders = slider::find($id);

        $img_name = $sliders->image;
        if($request->hasFile('image')) {
            File::delete(public_path('uploads/'.$sliders->image));
            $img_name = time().rand().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $img_name);
            $sliders->image = $img_name;
        }
 
        
         $sliders->update([
             'title' =>$request->title,
             'image'       =>$img_name,
             'content'   =>$request->content,
             'status'   =>$request->status,
         ]);
         return redirect()
         ->route('admin.sliders.index')
         ->with('msg', 'slider updated successfully')
         ->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sliders = slider::find($id);
        File::delete(public_path('uploads/'.$sliders->image));
        $sliders->delete();

        return redirect()
        ->route('admin.sliders.index')
        ->with('msg', 'slider Deleted successfully')
        ->with('type', 'danger');
    }
}
