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
        $data->visit_us = '3962 Circle Lake Drive Palm Beach FL 33417 USA';
        $data->call_us = '+61-561 856 0151';
        $data->mail_us = 'tino.moyongo@gmail.com';
        $data->save();
    }
}
 