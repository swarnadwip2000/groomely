<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderby('id', 'desc')->get();
        return view('admin.blogs.list')->with(compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view('admin.blogs.create')->with(compact('categories'));
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
            'blog_category_id' => 'required',
            'name' => 'required',
            'slug' => 'required|unique:blogs',
            'image' => 'required',
            'description' => 'required',
        ], [
            'blog_category_id.required' => 'Category field is required.'
        ]);

        $blog = new blog;
        $blog->name = $request->name;
        $blog->blog_category_id = $request->blog_category_id;
        $blog->slug = $request->slug;
        $blog->description = $request->description;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('image')->store('blogs', 'public');
            $blog->image = $image_path;
        }
        $blog->save();
        return redirect()->route('blogs.index')->with('message', 'Blog has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = BlogCategory::all();
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit')->with(compact('categories','blog'));
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

    public function delete($id)
    {
        Blog::findOrFail($id)->delete();
        return redirect()->back()->with('error', 'Blog has been deleted!');
    }

    public function changeBlogStatus(Request $request)
    {
        $user = Blog::find($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function blogUpdate(Request $request)
    {
        // return $request->all();
        $request->validate([
            'blog_category_id' =>'required',
            'name' => 'required',
            'slug' => 'required|unique:blogs,slug,'.$request->id,
            'description' => 'required',
        ], [
            'blog_category_id.required' => 'Category field is required.'
        ]);

        $blog = Blog::findOrFail($request->id);
        $blog->name = $request->name;
        $blog->blog_category_id = $request->blog_category_id;
        $blog->slug = $request->slug;
        $blog->description = $request->description;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('image')->store('blogs', 'public');
            $blog->image = $image_path;
        }
        $blog->save();
        return redirect()->route('blogs.index')->with('message', 'Blog has been updated successfully.');
    }
}
