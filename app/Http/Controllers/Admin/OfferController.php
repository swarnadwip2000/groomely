<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::Orderby('id','desc')->get();
        return view('admin.offer.list',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.offer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'offer_amount' => 'required|unique:offers|numeric',
            'offer_image' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $offer = new Offer();
        $offer->offer_amount = $request->offer_amount;
        if ($request->hasFile('offer_image')) {
            $file= $request->file('offer_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('offer_image')->store('offer', 'public');
            $offer->offer_image = $image_path;
        }
        $offer->save();
        return redirect()->route('offer.index')->with('message', 'Offer has been added successfully');
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
        $offer = Offer::findOrFail($id);
        return view('admin.offer.edit')->with(compact('offer'));
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

    public function offerUpdate(Request $request)
    {
        
        $request->validate([
            'offer_amount' => 'required|numeric',
            'offer_id' => 'required',
        ]);
        $offer = Offer::findOrFail($request->offer_id);
        $offer->offer_amount = $request->offer_amount;
        if ($request->hasFile('offer_image')) {
            $request->validate([
                'offer_image' => 'mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $file= $request->file('offer_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('offer_image')->store('offer', 'public');
            $offer->offer_image = $image_path;
        }
        $offer->update();

        return redirect()->route('offer.index')->with('message', 'Offer has been updated successfully');
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
}
