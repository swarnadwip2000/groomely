<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::get();
        return view('admin.gallery.index')->with(compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'images' => 'required',
            'images.*' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        foreach ($request->images as  $value) {
            $request->validate([
                'images.*' => 'mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $gallery = new Gallery();
            $file = $value;
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $image_path = $value->store('gallery', 'public');
            $gallery->image = $image_path;
            $gallery->save();
        }
        return redirect()->back()->with('message', 'Image has been uploaded successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteImage($id)
    {
        Gallery::find($id)->delete();
        return response()->json(['message'=>'Image has been deleted.']);
    }
}
