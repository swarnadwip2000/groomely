<?php

namespace Database\Seeders;

use App\Models\ServiceType;
use Illuminate\Database\Seeder;

class addServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceType::create([
            'category_id' => 1,
            'name' => 'Styling',
            'image' => 'service_type/styling.png',
            'main' => 1,
        ]);

        ServiceType::create([
            'category_id' => 1,
            'name' => 'Spa',
            'image' => 'service_type/spa.png',
            'main' => 1,
        ]);

        ServiceType::create([
            'category_id' => 1,
            'name' => 'Women-haircutting',
            'image' => 'service_type/styling.png',
            'main' => 1,
        ]);

        ServiceType::create([
            'category_id' => 2,
            'name' => "Trimming",
            'image' => 'service_type/trimming.png',
            'main' => 1,
        ]);

        ServiceType::create([
            'category_id' => 2,
            'name' => "Shaving",
            'image' => 'service_type/shaving.png',
            'main' => 1,
        ]);

        ServiceType::create([
            'category_id' => 2,
            'name' => 'Package',
            'image' => 'service_type/package.png',
            'main' => 1,
        ]);

        ServiceType::create([
            'category_id' => 3,
            'name' => 'Haircutting',
            'image' => 'service_type/haircutting.png',
            'main' => 1,
        ]);
    }
}
