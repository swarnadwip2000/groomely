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
        $home->save();
    }
}
