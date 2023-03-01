<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use PDF;


class DashboardController extends Controller
{
    public function dashboard()
    {
        // $count['accepted'] = Appointment::where('status', 'accepted')->whereHas('service', function ($query) {
        //     $query->where('user_id', Auth::user()->id);
        // })->count();
        // $count['reshedule'] = Appointment::where('status', 'reshedule')->whereHas('service', function ($query) {
        //     $query->where('user_id', Auth::user()->id);
        // })->count();

        // $count['completed'] = Appointment::where('status', 'completed')->whereHas('service', function ($query) {
        //     $query->where('user_id', Auth::user()->id);
        // })->count();

        // $count['cancelled'] = Appointment::where('status', 'cancelled')->whereHas('service', function ($query) {
        //     $query->where('user_id', Auth::user()->id);
        // })->count();

        //  $transaction['january'] = Appointment::with('service')->whereHas('service', function($query){
        //         $query->where('user_id', Auth::user()->id);
        //  })->where('status', 'completed')->whereMonth('updated_at', '1')->whereYear('updated_at',date('Y'))->sum('amount');
        //  $transaction['february'] = Appointment::with('service')->whereHas('service', function($query){
        //     $query->where('user_id', Auth::user()->id);
        //  })->where('status', 'completed')->whereMonth('updated_at', '2')->whereYear('updated_at',date('Y'))->sum('amount');
        // $transaction['march'] = Appointment::with('service')->whereHas('service', function($query){
        //         $query->where('user_id', Auth::user()->id);
        // })->where('status', 'completed')->whereMonth('updated_at', '3')->whereYear('updated_at',date('Y'))->sum('amount');
        // $transaction['april'] = Appointment::with('service')->whereHas('service', function($query){
        //     $query->where('user_id', Auth::user()->id);
        // })->where('status', 'completed')->whereMonth('updated_at', '4')->whereYear('updated_at',date('Y'))->sum('amount');
        // $transaction['may'] = Appointment::with('service')->whereHas('service', function($query){
        //     $query->where('user_id', Auth::user()->id);
        // })->where('status', 'completed')->whereMonth('updated_at', '5')->whereYear('updated_at',date('Y'))->sum('amount');
        // $transaction['june'] = Appointment::with('service')->whereHas('service', function($query){
        //     $query->where('user_id', Auth::user()->id);
        // })->where('status', 'completed')->whereMonth('updated_at', '6')->whereYear('updated_at',date('Y'))->sum('amount');

        // $transaction['july'] = Appointment::with('service')->whereHas('service', function($query){
        //     $query->where('user_id', Auth::user()->id);
        // })->where('status', 'completed')->whereMonth('updated_at', '7')->whereYear('updated_at',date('Y'))->sum('amount');
        // $transaction['august'] = Appointment::with('service')->whereHas('service', function($query){
        //     $query->where('user_id', Auth::user()->id);
        // })->where('status', 'completed')->whereMonth('updated_at', '8')->whereYear('updated_at',date('Y'))->sum('amount');
        // $transaction['september'] = Appointment::with('service')->whereHas('service', function($query){
        //     $query->where('user_id', Auth::user()->id);
        // })->where('status', 'completed')->whereMonth('updated_at', '9')->whereYear('updated_at',date('Y'))->sum('amount');
        // $transaction['october'] = Appointment::with('service')->whereHas('service', function($query){
        //     $query->where('user_id', Auth::user()->id);
        // })->where('status', 'completed')->whereMonth('updated_at', '10')->whereYear('updated_at',date('Y'))->sum('amount');

        // $transaction['november'] = Appointment::with('service')->whereHas('service', function($query){
        //     $query->where('user_id', Auth::user()->id);
        // })->where('status', 'completed')->whereMonth('updated_at', '11')->whereYear('updated_at',date('Y'))->sum('amount');
        // $transaction['december'] = Appointment::with('service')->whereHas('service', function($query){
        //     $query->where('user_id', Auth::user()->id);
        // })->where('status', 'completed')->whereMonth('updated_at', '12')->whereYear('updated_at',date('Y'))->sum('amount');

        // $seller_services = Service::where('user_id',Auth::user()->id)->get();

        // return view('seller.dashboard')->with(compact('count','transaction','seller_services'));
        return view('seller.dashboard');
    }

    public function ajaxBarChart(Request $request)
    {
        if ($request->ajax()) {
        
            $transaction['january'] = Appointment::with('service')->whereHas('service', function($query){
                $query->where('user_id', Auth::user()->id);
         })->where('status', 'completed')->whereMonth('updated_at', '1')->whereYear('updated_at',$request->year)->sum('amount');
         $transaction['february'] = Appointment::with('service')->whereHas('service', function($query){
            $query->where('user_id', Auth::user()->id);
         })->where('status', 'completed')->whereMonth('updated_at', '2')->whereYear('updated_at',$request->year)->sum('amount');
        $transaction['march'] = Appointment::with('service')->whereHas('service', function($query){
                $query->where('user_id', Auth::user()->id);
        })->where('status', 'completed')->whereMonth('updated_at', '3')->whereYear('updated_at',$request->year)->sum('amount');
        $transaction['april'] = Appointment::with('service')->whereHas('service', function($query){
            $query->where('user_id', Auth::user()->id);
        })->where('status', 'completed')->whereMonth('updated_at', '4')->whereYear('updated_at',$request->year)->sum('amount');
        $transaction['may'] = Appointment::with('service')->whereHas('service', function($query){
            $query->where('user_id', Auth::user()->id);
        })->where('status', 'completed')->whereMonth('updated_at', '5')->whereYear('updated_at',$request->year)->sum('amount');
        $transaction['june'] = Appointment::with('service')->whereHas('service', function($query){
            $query->where('user_id', Auth::user()->id);
        })->where('status', 'completed')->whereMonth('updated_at', '6')->whereYear('updated_at',$request->year)->sum('amount');

        $transaction['july'] = Appointment::with('service')->whereHas('service', function($query){
            $query->where('user_id', Auth::user()->id);
        })->where('status', 'completed')->whereMonth('updated_at', '7')->whereYear('updated_at',$request->year)->sum('amount');
        $transaction['august'] = Appointment::with('service')->whereHas('service', function($query){
            $query->where('user_id', Auth::user()->id);
        })->where('status', 'completed')->whereMonth('updated_at', '8')->whereYear('updated_at',$request->year)->sum('amount');
        $transaction['september'] = Appointment::with('service')->whereHas('service', function($query){
            $query->where('user_id', Auth::user()->id);
        })->where('status', 'completed')->whereMonth('updated_at', '9')->whereYear('updated_at',$request->year)->sum('amount');
        $transaction['october'] = Appointment::with('service')->whereHas('service', function($query){
            $query->where('user_id', Auth::user()->id);
        })->where('status', 'completed')->whereMonth('updated_at', '10')->whereYear('updated_at',$request->year)->sum('amount');

        $transaction['november'] = Appointment::with('service')->whereHas('service', function($query){
            $query->where('user_id', Auth::user()->id);
        })->where('status', 'completed')->whereMonth('updated_at', '11')->whereYear('updated_at',$request->year)->sum('amount');
        $transaction['december'] = Appointment::with('service')->whereHas('service', function($query){
            $query->where('user_id', Auth::user()->id);
        })->where('status', 'completed')->whereMonth('updated_at', '12')->whereYear('updated_at',$request->year)->sum('amount');
           
        return response()->json(['view'=>(String)View::make('seller.ajax-bar-chart')->with(compact('transaction'))]);
        }
    }

    public function profile()
    {
        return view('seller.profile');
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|unique:users,email,' . Auth::user()->id,
            'phone'    => 'required|numeric|min:10',
            'shop_name'    => 'required',
            'profile_picture' => 'required',
        ]);

        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->shop_name = $request->shop_name;
        $data->phone = $request->phone;
        if ($request->password) {
            $request->validate([
                'password' => 'required|min:8',
            ]);
            $data->password = bcrypt($request->password);
        }
        $now_time = Carbon::now()->toDateTimeString();  
        $data->password_update_time = $now_time;


        if ($request->hasFile('profile_picture')) {
            $request->validate([
                'profile_picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            $file = $request->file('profile_picture');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $image_path = $request->file('profile_picture')->store('seller', 'public');
            $data->profile_picture = $image_path;
        }
        $data->save();
        return redirect()->back()->with('message', 'Profile updated successfully.');
    }

    public function downloadTransaction(Request $request)
    {
        // return $request;
        $transactions = Appointment::with('service')->whereHas('service', function($query){
            $query->where('user_id', Auth::user()->id);
        })->where('status', 'completed')->whereYear('updated_at',$request->year)->get();

        $sum = Appointment::with('service')->whereHas('service', function($query){
            $query->where('user_id', Auth::user()->id);
        })->where('status', 'completed')->whereYear('updated_at',$request->year)->get()->sum('amount');

        $pdf = PDF::loadView('seller.transactionPDF',array('transactions' => $transactions, 'sum' => $sum));
    
        return $pdf->download('seller-transaction.pdf');
    }
}
