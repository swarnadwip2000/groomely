<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = BlogCategory::orderby('id', 'desc')->get();
        return view('admin.blogs.category.list')->with(compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.category.create');
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
            'name' => 'required',
            'slug' => 'required|unique:blog_categories',
        ]);

        $blog = new BlogCategory();
        $blog->name = $request->name;
        $blog->slug = $request->slug;
        $blog->save();
        return redirect()->route('blog-category.index')->with('message', 'Category has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = BlogCategory::findOrFail($id);
        return view('admin.blogs.category.edit')->with(compact('category'));
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
        BlogCategory::findOrFail($id)->delete();
        return redirect()->back()->with('error', 'Category has been deleted!');
    }

    public function blogCategoryUpdate(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:blog_categories,slug,'.$request->id
        ]);

        $blog = BlogCategory::findOrFail($request->id);
        $blog->name = $request->name;
        $blog->slug = $request->slug;
        $blog->save();
        return redirect()->route('blog-category.index')->with('message', 'Category has been updated successfully.');
    }
}
