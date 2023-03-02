<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\BookAppointmentMail;
use App\Models\Appointment;
use App\Models\BookingTime;
use App\Models\Service;
use App\Models\Review;
use App\Models\SellerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class BookNowController extends Controller
{
    public function bookNow($id)
    {
        
        $id = base64_decode($id);
        // $service = Service::where('id',$id)->with('review')->first();
        $service = Service::where('id',$id)->with('additionalService')->first();
        $shops = SellerService::where('service_id',$id)->with('user')->get();
        $reviews = Review::where('service_id',$id)->with('user')->get();
        $times = BookingTime::get();
        return view('frontend.book-now')->with(compact('service', 'times','reviews','shops'));
          
    }

    public function submitAppointment(Request $request)
    {
       
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login first to booked the appointment!!');
        } else {
            if (Auth::user()->hasRole('USER')) {
                // return $request->all();
                $request->validate([
                    'booking_date' => 'required',
                    'booking_time_id' => 'required',
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'required|numeric'
                ], [
                    'booking_time_id.required' => 'Booking time filed is required.'
                ]);
                $count = Appointment::where(['service_id' => $request->service_id, 'booking_date' => $request->booking_date, 'booking_time_id' => $request->booking_time_id])->count();
                if ($count >= 25) {
                    return redirect()->back()->with('error', 'Slot not available!!');
                }
                $appointment = new Appointment;
                $appointment->user_id = Auth::user()->id;
                $appointment->seller_id = $request->seller_id;
                $appointment->service_id = $request->service_id;
                $appointment->booking_date = $request->booking_date;
                $appointment->amount = $request->amount;
                $appointment->booking_time_id = $request->booking_time_id;
                $appointment->name = $request->name;
                $appointment->email = $request->email;
                $appointment->phone = $request->phone;
                $appointment->save();
                $email = $request->email;
                $maildata = [
                    'appointment' => $appointment,
                ];
                Mail::to($email)->send(new BookAppointmentMail($maildata));
                return redirect()->route('appointments.index')->with('message', 'Thank you for booking slot. Our team will be in touch with you soon');
            } else {
                return redirect()->route('login')->with('error', 'Please login as a user!!');
            }
        }
    } 

    public function servicePrice(Request $request)
    {
        
        $get_price = SellerService::where('user_id',$request->seller_id)->where('service_id',$request->service_id)->first();
        return response()->json(['data' => $get_price]);
    }

    
}
 