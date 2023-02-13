<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\BookingTime;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::where('user_id', Auth::user()->id)->get();
        return view('user.appointments.list')->with(compact('appointments'));
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

    public function resheduleBooking($id)
    {
        $appointment = Appointment::findOrFail($id);
        $times = BookingTime::all();
        return view('user.appointments.reshedule')->with(compact('appointment', 'times'));
    }

    public function resheduleStore(Request $request)
    {
        $request->validate([
            'booking_time_id' => 'required',
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
            $appointment->status = 'process';
            $appointment->update();
            return redirect()->route('appointments.index')->with('message', 'Appointment has been resheduled successfully. Please wait for barber response');
        }
    }

    public function acceptAppointment($id)
    {
        Appointment::where('id', $id)->update(['status' => 'accepted']);
        return redirect()->back()->with('message', 'Appointment has been resheduled successfully.');
    }

    public function view($id)
    {

        $count = Appointment::where(['id' => $id, 'user_id' => Auth::user()->id])->count();

        if ($count > 0) {
            $appointment = Appointment::findOrFail($id);
            return view('user.appointments.view')->with(compact('appointment'));
        } else {
            return redirect()->back();
        }
    }

    public function downloadInvoice($id)
    {
        $invoice = Invoice::find($id);
        $file_path = $invoice->file;
        $myFile = storage_path('app/public/'.$file_path);
    	return response()->download($myFile);

    }
}
