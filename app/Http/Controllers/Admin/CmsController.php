<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeCms;
use Illuminate\Http\Request;
use App\Traits\ImageTrait;

class CmsController extends Controller
{
    use ImageTrait;

    public function homeCms()
    {
        $home = HomeCms::first();
        return view('admin.cms.home-cms')->with(compact('home'));
    }

    public function homeCmsStore(Request $request)
    {
       $validateData =  $request->validate([
            'banner_content_1'=>'required',
            'banner_content_2' => 'required',
            'section_1_title' => 'required',
            'section_1_description' => 'required',
            'section_2_title' => 'required',
            'section_2_name' => 'required',
            'section_2_description' => 'required',
            'section_3_title' => 'required',
            'section_3_description' => 'required',
            'section_4_title' => 'required',
            'section_4_description' => 'required',
            'section_5_title' => 'required',
            'section_5_description' => 'required',
        ]);

        $homeCms =  HomeCms::findOrFail($request->id);
        $homeCms->fill($validateData);
        if ($request->hasfile('banner_img')) {
            $request->validate([
                'banner_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $homeCms->banner_img = $this->imageUpload($request->file('banner_img'), 'home');
        }

        if ($request->hasfile('section_2_img')) {
            $request->validate([
                'section_2_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $homeCms->section_2_img = $this->imageUpload($request->file('section_2_img'), 'home');
        }

        if ($request->hasfile('section_5_img')) {
            $request->validate([
                'section_5_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $homeCms->section_5_img = $this->imageUpload($request->file('section_5_img'), 'home');
        }

        $homeCms->save();

        return redirect()->back()->with('message', 'Home page content has been updated successfully.');
        
    }
}
