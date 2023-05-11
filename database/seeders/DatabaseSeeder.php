<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AssignRoleSeeder::class,
            AssignAdminSeeder::class,
            AddCategoriesSeeder::class,
            addTimeShedule::class, 
            addHomePageSeeder::class,
            addServiceTypeSeeder::class,
            AddAbouPageSeeder::class,
            addServicePageSeeder::class,
            AddFooterPageSeeder::class,
            GalleryImageSeeder::class,
            AddBestSellerSeeder::class,
            AddContactUsSeeder::class,
            OfferSeeder::class
        ]);
    
    }
}
