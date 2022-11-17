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
            'name' => 'Haircutting',
            'image' => 'service_type/haircutting.png',
        ]);

        ServiceType::create([
            'name' => "Shaving",
            'image' => 'service_type/shaving.png',
        ]);

        ServiceType::create([
            'name' => 'Styling',
            'image' => 'service_type/styling.png',
        ]);

        ServiceType::create([
            'name' => "Trimming",
            'image' => 'service_type/trimming.png',
        ]);

        ServiceType::create([
            'name' => 'Package',
            'image' => 'service_type/package.png',
        ]);
    }
}
