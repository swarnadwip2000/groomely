<?php

namespace Database\Seeders;

use App\Models\FooterCms;
use Illuminate\Database\Seeder;

class AddFooterPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        $home = new FooterCms();
        $home->copyright_content = 'Copyright © 2022. All Rights Reserved. Designed & Development by Excellis IT.';
        $home->facebook_link = 'https://www.facebook.com/';
        $home->instagram_link = 'https://www.instagram.com/';
        $home->youtube_link = 'https://www.youtube.com/';
        // $home->address = '3962 Circle Lake Drive Palm Beach FL 33417 USA';
        $home->phone = '+1 561 318 3904';
        $home->email = 'support@groomely.com';
        $home->image1 = 'footer/gallery1.jpg';
        $home->image2 = 'footer/gallery2.jpg';
        $home->image3 = 'footer/gallery3.jpg';
        $home->image4 = 'footer/gallery4.jpg';
        $home->image5 = 'footer/gallery5.jpg';
        $home->image6 = 'footer/gallery6.jpg';
        $home->save();
    }
}
