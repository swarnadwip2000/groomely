<?php

namespace Database\Seeders;

use App\Models\BookingTime;
use Illuminate\Database\Seeder;

class addTimeShedule extends Seeder
{
    /**
     * Run the database seeds:
     *
     * @return void
     */
    public function run()
    {
         $times = ['9:00 am - 10:00 am','10:00 am - 11:00 am','11:00 am - 12:00 pm','12:00 pm - 1:00 pm','1:00 pm - 2:00 pm','2:00 pm - 3:00 pm','3:00 pm - 4:00 pm','4:00 pm - 5:00 pm','5:00 pm - 6:00 pm','6:00 pm - 7:00 pm','7:00 pm - 8:00 pm'];
         foreach ($times as $time) {
            $shedule = new BookingTime();
            $shedule->time = $time;
            $shedule->save();
         }
    }
}
