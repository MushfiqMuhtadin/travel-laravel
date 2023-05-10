<?php

namespace App\Http\Controllers;

use App\Models\Traveller;
use Illuminate\Http\Request;
use App\Models\Travelpackages;
use App\Models\Payment;

class TravellerController extends Controller
{
    public function TravellerDashboard(Request $request)
    {

        $traveller = Traveller::all();
        $travellerid = $request->session()->get('traveller_id');
        $package = Travelpackages::all();
        return view('traveller.traveller', [

            'traveller' => $traveller,
            'travellerid' => $travellerid,
            'package' => $package,
            
        ]);
    }

    

    public function checkout(Request $request, $id)
    {
        $package = Travelpackages::find($id);
        $travellerid = $request->session()->get('traveller_id');
        $travellerfirstname = $request->session()->get('traveller_firstname');
        $travellerlastname = $request->session()->get('traveller_lastname');
        $travelleremail = $request->session()->get('traveller_email');
        $travelleraddress = $request->session()->get('traveller_address');
        $travellernid = $request->session()->get('traveller_nid');
        $travellerphone = $request->session()->get('traveller_phone');


        return view(
            'traveller.checkout',
            [
                'package' => $package,
                'travellerid' => $travellerid,
                'travellerfirstname' => $travellerfirstname,
                'travellerlastname' => $travellerlastname,
                'travelleremail' => $travelleremail,
                'travelleraddress' => $travelleraddress,
                'travellernid' => $travellernid,
                'travellerphone' => $travellerphone
            ]
        );
    }

    public function checkoutpost(Request $request)
    {
        $payment = new Payment();
        $payment->name = $request->name;
        $payment->travellerid = $request->travellerid;
        $payment->email = $request->email;
        $payment->phone = $request->phone;
        $payment->address = $request->address;
        $payment->nid = $request->nid;
        $payment->price = $request->price;
        $payment->cardname = $request->cardname;
        $payment->packagename = $request->packagename;
        $payment->cardnumber = $request->cardnumber;
        $result = $payment->save();
        if ($result) {
            return redirect()->route('traveller/dashboard')->with('success', 'Payment successful Our executives will reach you soon');
        }
    }

    public function paymenthistory($id)
    {
        $traveller = Traveller::find($id);
        $payment = Payment::where('travellerid', $id)->get();

        return view(
            'traveller.paymenthistory',
            [
                'payment' => $payment,
                'traveller' => $traveller
            ]
        );
    }


    public function TravellerProfile(Request $request, $id)
    {

        $traveller = Traveller::find($id);
        $travellerid = $request->session()->get('traveller_id');




        return view(
            'traveller.profile',
            [
                'travellerid' => $travellerid,

                'traveller' => $traveller

            ]
        );
    }



    public function TravellerEditProfile($id)
    {
        $traveller = Traveller::findOrFail($id);
        return view(
            'traveller.editprofile',
            [
                'traveller' => $traveller
            ]
        );
    }

    public function TravellerUpdateProfile(Request $request, $id)
    {

        $traveller = Traveller::findOrFail($id);
        $traveller->firstname = $request->input('firstname');
        $traveller->lastname = $request->input('lastname');
        $traveller->phone = $request->input('phone');
        $traveller->address = $request->input('address');
        $traveller->dob = $request->input('dob');
        $traveller->nid = $request->input('nid');
       
        $traveller->save();

        return redirect()->route('traveller/dashboard')->with('success', 'Traveller profile updated successfully!');
    }


}
