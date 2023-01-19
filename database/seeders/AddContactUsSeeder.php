<?php

namespace Database\Seeders;

use App\Models\ContactUsCms;
use Illuminate\Database\Seeder;

class AddContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new ContactUsCms();
        $data->title = 'Contact Us';
        $data->description = "Now we are engaged for some time, let's get connected";
        $data->visit_us = '502 W SKELLY RD Haskell 74436 USA';
        $data->call_us = '+1 561 318 3904';
        $data->mail_us = 'charleshollis0088@gmail.com';
        $data->save();
    }
}
 