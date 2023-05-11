<?php

namespace Database\Seeders;

use App\Models\HomeCms;
use Illuminate\Database\Seeder;

class addHomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home = new HomeCms();
        $home->banner_img = 'home/banner.jpg';
        $home->banner_content_1 = 'WELCOME TO';
        $home->banner_content_2 = 'Groomely';
        $home->section_1_title = 'CATEGORIES';
        $home->section_1_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus ultrices risus nisi ullamcorper aenean dignissim odio tincidunt.';
        $home->section_2_title = 'ABOUT US';
        $home->section_2_name = 'WELCOME TO GROOMELY';
        $home->section_2_description = 'Providing quality electrical services and solutions across all aspects of domestic and commercial environments, from new installations , upgrades, repairs and maintenance services. Austi Electrical are licensed and insured electrical contractors based in the Northern Illawarra region servicing all areas of Greater Sydney, Wollongong, Campbelltown and the Sutherland Shire.';
        $home->section_2_img = 'home/about.jpg';
        $home->section_3_title = 'OUR SERVICES';
        $home->section_3_description = 'All aspects of domestic and commercial environments';
        // $home->middle_banner_1 = 'home/middle_banner_1.jpg';
        // $home->middle_banner_2 = 'home/middle_banner_2.jpg';
        // $home->middle_banner_3 = 'home/middle_banner_3.jpg';
        $home->section_4_title = 'OUR FEATURED SERVICES';
        $home->section_4_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus ultrices risus nisi ullamcorper aenean dignissim odio tincidunt.';
        $home->section_5_title = 'BECAME A SELLER';
        $home->section_5_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus ultrices risus nisi ullamcorper aenean dignissim odio tincidunt.';
        $home->section_5_img = 'home/became_a_seller.jpg';
        $home->save();
    }
}
