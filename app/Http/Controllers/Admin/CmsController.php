<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutCms;
use App\Models\ContactUsCms;
use App\Models\FooterCms;
use App\Models\HomeCms;
use App\Models\ServiceCms;
use Illuminate\Http\Request;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Session;

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

    public function aboutCms()
    {
        $about = AboutCms::first();
        return view('admin.cms.about-cms')->with(compact('about'));
    }

    public function aboutCmsStore(Request $request)
    {
        $validateData =  $request->validate([
            'banner_name' => 'required',
            'section_1_title' => 'required',
            'section_1_description' => 'required',
            'section_1_name' => 'required',
            'section_2_title' => 'required',
            'section_3_name' => 'required',
            'section_3_title' => 'required',
            'section_3_description' => 'required',
        ]);

        $aboutCms =  AboutCms::findOrFail($request->id);
        $aboutCms->fill($validateData);
        if ($request->hasfile('banner_img')) {
            $request->validate([
                'banner_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $aboutCms->banner_img = $this->imageUpload($request->file('banner_img'), 'about');
        }

        if ($request->hasfile('section_1_img')) {
            $request->validate([
                'section_1_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $aboutCms->section_1_img = $this->imageUpload($request->file('section_1_img'), 'about');
        }

        if ($request->hasfile('section_2_img')) {
            $request->validate([
                'section_2_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $aboutCms->section_2_img = $this->imageUpload($request->file('section_2_img'), 'about');
        }

        if ($request->hasfile('section_3_img')) {
            $request->validate([
                'section_3_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $aboutCms->section_3_img = $this->imageUpload($request->file('section_3_img'), 'about');
        }

        $aboutCms->save();

        return redirect()->back()->with('message', 'About us page content has been updated successfully.');
    }

    public function serviceCms()
    {
        // return "okk";
        $allService = ServiceCms::orderby('id','desc')->get();
        return view('admin.cms.service-cms.list',compact('allService'));
    }

    public function serviceCmsCreate()
    {
        // return "okk";
        return view('admin.cms.service-cms.create');
    }

    public function serviceCmsStore(Request $request)
    {
        // return $request;
       $request->validate([
            'name'=>'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'icon' => 'required',
        ]);
        $serviceCms =  new ServiceCms;
        $serviceCms->name = $request->name;
        $serviceCms->title = $request->title;
        $serviceCms->description = $request->description;
        if ($request->hasfile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $serviceCms->image = $this->imageUpload($request->file('image'), 'serrvice-cms/image');
        }

        if ($request->hasfile('icon')) {
            $request->validate([
                'icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $serviceCms->icon = $this->imageUpload($request->file('icon'), 'serrvice-cms/icon');
        }
        $serviceCms->save();

        return redirect()->route('service.cms')->with('message', 'Service content has been uploaded successfully.');
    }

    public function serviceCmsEdit($id,Request $request)
    {
        // return $id;
        $serviceCms = ServiceCms::where('id',$id)->first();
        return view('admin.cms.service-cms.edit',compact('serviceCms'));
       
    }

    public function serviceCmsUpdate(Request $request)
    {
        // return $request;
        $serviceCms =  ServiceCms::findOrFail($request->id);
        $serviceCms->name = $request->name;
        $serviceCms->title = $request->title;
        $serviceCms->description = $request->description;
        if ($request->hasfile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $serviceCms->image = $this->imageUpload($request->file('image'), 'serrvice-cms/image');
        }

        if ($request->hasfile('icon')) {
            $request->validate([
                'icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $serviceCms->icon = $this->imageUpload($request->file('icon'), 'serrvice-cms/icon');
        }
        $serviceCms->update();

        return redirect()->back()->with('message', 'Service Cms content has been updated successfully.');
    }

    public function serviceCmsDelete($id,Request $request)
    {
        ServiceCms::findOrFail($id)->delete();
        return redirect()->back()->with('error', 'Service cms has been deleted!');
    }

    public function footerCms()
    {
        $footer = FooterCms::first();
        return view('admin.cms.footer-cms')->with(compact('footer'));
    }

    public function footerCmsStore(Request $request)
    {
        $validateData =  $request->validate([
            'copyright_content' => 'required',
            'facebook_link' => 'required',
            'instagram_link' => 'required',
            // 'address' => 'required',
            'phone' => 'required|min:10|max:16',
            'email' => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'youtube_link'=> 'required',
        ]);

        $footerCms =  FooterCms::findOrFail($request->id);
        $footerCms->fill($validateData);
        $footerCms->save();

        return redirect()->back()->with('message', 'Footer page content has been updated successfully.');
    }

    public function contactUsCms()
    {
        $contactUs = ContactUsCms::first();
        return view('admin.cms.contact-us-cms')->with(compact('contactUs'));
    }

    public function contactUsCmsStore(Request $request)
    {
        $validateData =  $request->validate([
            'title' => 'required',
            'description' => 'required',
            'visit_us' => 'required',
            'call_us' => 'required|min:10|max:16',
            'mail_us' => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
        ]);

        $contactUsCms =  ContactUsCms::findOrFail($request->id);
        $contactUsCms->fill($validateData);
        $contactUsCms->save();

        return redirect()->back()->with('message', 'Contact us page content has been updated successfully.');
    }
}
