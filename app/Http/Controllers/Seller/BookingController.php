<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Mail\AcceptAppointmentMail;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $appointments = Appointment::orderBy('id', 'desc')->with('service')->whereHas('service', function($query){
            $query->where('user_id', Auth::user()->id);
        })->get();
        return view('seller.booking-history.list')->with(compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function view($id)
    {
       $count = Appointment::where(['id' => $id])->whereHas('service', function($query){
            $query->where('user_id', Auth::user()->id);
        })->count();

        if ($count > 0) {
            $appointment = Appointment::findOrFail($id);
            return view('seller.booking-history.view')->with(compact('appointment'));
        } else {
            return redirect()->back();
        }
    }

    public function acceptBooking($id)
    {
        Appointment::where('id', $id)->update(['status'=>'accepted']);
        $appointment = Appointment::find($id);
        $email = $appointment['service']['user']['email'];
        $maildata = [
            'appointment' => $appointment,
        ];
        Mail::to($email)->send(new AcceptAppointmentMail($maildata));
        return redirect()->back()->with('message', 'Booking has been accepted successfully.');
    }
}
