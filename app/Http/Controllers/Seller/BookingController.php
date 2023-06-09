<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Mail\ResheduleAppointmentMail;
use App\Models\Appointment;
use App\Models\BookingTime;
use App\Models\ExtraService;
use App\Models\Service;
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
        $appointments = Appointment::orderBy('booking_date', 'asc')->with('service')->whereHas('service', function ($query) {
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
        $count = Appointment::where(['id' => $id])->whereHas('service', function ($query) {
            $query->where('user_id', Auth::user()->id);
        })->count();
    
        if ($count > 0) {
            $appointment = Appointment::findOrFail($id);
            $services = Service::where('user_id', Auth::user()->id)->get();
            $extraServices = ExtraService::where('appointment_id', $id)->get();
            return view('seller.booking-history.view')->with(compact('appointment', 'services', 'extraServices'));
        } else {
            return redirect()->back();
        }
    }

    public function acceptBooking($id)
    {
        Appointment::where('id', $id)->update(['status' => 'accepted']);
        $appointment = Appointment::find($id);
        $email = $appointment['service']['user']['email'];
        $maildata = [
            'appointment' => $appointment,
        ];
        return redirect()->back()->with('message', 'Booking has been accepted successfully.');
    }

    public function resheduleBooking($id)
    {
        $appointment = Appointment::findOrFail($id);
        $times = BookingTime::all();
        return view('seller.booking-history.reshedule')->with(compact('appointment', 'times'));
    }

    public function resheduleStore(Request $request)
    {
        $request->validate([
            'booking_date' => 'required',
        ], [
            'booking_time_id.required' => 'Booking time filed is required.'
        ]);

        $appointment = Appointment::findOrFail($request->id);
        $count = Appointment::where(['service_id' => $appointment->service_id, 'booking_date' => $request->booking_date, 'booking_time_id' => $request->booking_time_id])->count();
        if ($count >= 25) {
            return redirect()->back()->with('error', 'Slot not available!!');
        } else {
            $appointment->booking_time_id = $request->booking_time_id;
            $appointment->booking_date = $request->booking_date;
            $appointment->status = 'reshedule';
            $appointment->update();
            $email = $appointment->email;
            $maildata = [
                'appointment' => $appointment,
            ];
            Mail::to($email)->send(new ResheduleAppointmentMail($maildata));
            return redirect()->route('booking-history.index')->with('message', 'Booking has been resheduled successfully.');
        }
    }

    public function bookingAccepted($id)
    {
        $id = base64_decode($id);
        Appointment::where('id', $id)->update(['status' => 'accepted']);
        return redirect()->back();
    }

    public function bookingRejected($id)
    {
        $id = base64_decode($id);
        Appointment::where('id', $id)->update(['status' => 'rejected']);
        return redirect()->back();
    }

    public function addExtraService(Request $request)
    {
        $request->validate([
            'service_id' => 'required',
        ]);

        $extraService = new ExtraService();
        $extraService->service_id = $request->service_id;
        $extraService->appointment_id = $request->appointment_id;
        $extraService->save();
        $service = Service::find($request->service_id);
        $appointment = Appointment::find($request->appointment_id);
        $appointment->amount = $appointment->amount + $service->rate;
        $appointment->save();
        return redirect()->back()->with('message', 'Extra service has been added succesfully.');
    }
}
