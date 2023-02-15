<?php

namespace Database\Seeders;
use App\Models\BestSellerCms;
use Illuminate\Database\Seeder;

class AddBestSellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $best_seller = new BestSellerCms();
        $best_seller->banner_img = 'best_seller/bestsl-banner.jpg';
        $best_seller->banner_name = 'BEST SELLERS IN';
        $best_seller->section_title = 'OUR BEST SELLERS';
        $best_seller->section_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus ultrices
        risus nisi ullamcorper aenean dignissim odio tincidunt.';
        $best_seller->save();
    }
}
