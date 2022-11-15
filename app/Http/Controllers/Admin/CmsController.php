<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeCms;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function homeCms()
    {
        $home = HomeCms::first();
        return view('admin.cms.home-cms')->with(compact('home'));
    }
}
