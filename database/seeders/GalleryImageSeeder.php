<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GalleryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            'gallery/gallery7.jpg',
            'gallery/gallery8.jpg',
            'gallery/gallery9.jpg',
            'gallery/gallery10.jpg',
            'gallery/gallery11.jpg',
            'gallery/gallery12.jpg',
        ];

        for ($i=0; $i < count($array) ; $i++) { 
            $gallery = new Gallery();
            $gallery->image = $array[$i];
            $gallery->save();
        }
    }
}
