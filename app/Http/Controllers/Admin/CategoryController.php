<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderby('id', 'desc')->get();
        return view('admin.category.list')->with(compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'slug' => 'required|unique:categories',
            'image' => 'required',
        ]);

        $blog = new Category();
        $blog->name = $request->name;
        $blog->slug = $request->slug;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('image')->store('category', 'public');
            $blog->icon = $image_path;
        }
        $blog->save();
        return redirect()->route('category.index')->with('message', 'Category has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit')->with(compact('category'));
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
        Category::findOrFail($id)->delete();
        return redirect()->back()->with('error', 'Category has been deleted!');
    }

    public function changeCategoryStatus(Request $request)
    {
        $user = Category::find($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success'=>'Status change successfully.']);
    }

    public function categoryUpdate(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories,slug,'.$request->id,
        ]);

        $category = Category::findOrFail($request->id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('image')->store('category', 'public');
            $category->icon = $image_path;
        }
        $category->save();
        return redirect()->route('category.index')->with('message', 'Category has been updated successfully');
    }
}


