<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use App\Models\BestSellerCms;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::where('status', 1)->get();
        $detail=[];
        $shop_detail=[];
        $shop = User::role('BUSINESS_OWNER')->with('appointment')->get();
        foreach($shop as $vall)
        {
            
            $detail['image'] = $vall['profile_picture'];
            $detail['total'] = User::appointmentsSum($vall->id);
            if($detail['total'] > 0)
            {
                $shop_detail[] = $detail;
            }
            
        }
        $details = collect($shop_detail)->sortByDesc('total');
        $bestSellerCms = BestSellerCms::first();
        return view('frontend.blog')->with(compact('blogs','bestSellerCms','details'));
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
