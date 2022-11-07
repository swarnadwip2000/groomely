<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::where('status', 1)->get();
        return view('frontend.blog')->with(compact('blogs'));
    }

    public function blogDetails($blogslug, $slug, $id)
    {
        $blog = Blog::findOrFail($id);
        $blogCategories = BlogCategory::all();
        $recentBlogs = Blog::orderBy('id','desc')->where('status', 1)->get()->take(3);
        return view('frontend.blog-details')->with(compact('blog','blogCategories','recentBlogs'));
    }

    public function blogCategory($slug, $id)
    {
        $blogCategory = BlogCategory::find($id);
        $blogs = Blog::where(['blog_category_id'=>$id, 'status'=>1])->get();
        return view('frontend.blog-category')->with(compact('blogs','blogCategory'));
    }

}
