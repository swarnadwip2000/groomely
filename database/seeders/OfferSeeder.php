<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Offer::create([
            'offer_amount' => '35',
            'offer_image' => 'offer/offer1.jpg',
        ]);

        Offer::create([
            'offer_amount' => '50',
            'offer_image' => 'offer/offer2.jpg',
        ]);

        Offer::create([
            'offer_amount' => '20',
            'offer_image' => 'offer/offer3.jpg',
        ]);

    }
}
