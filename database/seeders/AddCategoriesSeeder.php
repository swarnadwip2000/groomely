<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Women Hair Cut',
            'slug' => 'women-hair-cut',
            'icon' => 'category/women-hair-cut.png',
        ]);

        Category::create([  
            'name' => "Men's Hair Cut",
            'slug' => 'men-hair-cut',
            'icon' => 'category/men-hair-cut.png',
        ]);

        Category::create([
            'name' => 'Children',
            'slug' => 'children',
            'icon' => 'category/children.png',
        ]);
    }
}
