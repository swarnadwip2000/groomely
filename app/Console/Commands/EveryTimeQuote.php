<?php

namespace App\Console\Commands;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Console\Command;

class EveryTimeQuote extends Command
{
    /**
     * The name and signature of the console command.
     * 
     * @var string 
     */
     protected $signature = 'time:quote';
     
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Appointment has been declained.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $appointments = Appointment::where('booking_date', date('m/d/Y'))->get();
        foreach ($appointments as $key => $appointment) {
            $lastTime = explode(' - ', $appointment['BookTime']['time']);
            $time = Carbon::parse($lastTime[1]);
            $time->addMinutes(30);
            $newTime = date('h:i A', strtotime($time));
            
            if ($appointment['BookTime'] != 'completed') {
                if ($newTime == date('h:i A') ) {
                    Appointment::where('id', $appointment->id)->update(['status'=> 'cancelled']);
                }
            }
            
        }
        $this->info('Auto cancelletion of booking has been done.');
    }
}
