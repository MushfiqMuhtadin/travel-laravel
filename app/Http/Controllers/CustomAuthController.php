<?php

namespace App\Http\Controllers;

use App\Models\Traveller;
use Illuminate\Http\Request;
use App\Models\Travelpackages;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{

    public function tourpackage(Request $request)
    {

        $traveller = Traveller::all();
        $travellerid = $request->session()->get('traveller_id');
        $package = Travelpackages::all();
        return view('package', [

            'traveller' => $traveller,
            'travellerid' => $travellerid,
            'package' => $package,

        ]);
    }



    public function login()
    {

        return view('login');
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }
    
    public function register()
    {

        return view('register');
    }

    public function registerpost(Request $request)
    {
        $request->validate([
            
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'nid' => 'required',
            'password' => 'required|min:3|max:12',
           
        ]);

        $user = new Traveller();
     
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->role = $request->role;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->nid = $request->nid;
        $user->password = $request->password;
     
    
        $result = $user->save();
        if ($result) {
            return redirect()->route('login')->with('success', 'Registration successful please Login');
        } else {
            return redirect()->route('login')->with('fail', 'Something Wrong try again');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3|max:12'
        ]);

        $traveller = Traveller::where('email', $request->email)->first();
        // $admin = Admin::where('email', $request->email)->first();


      

        if ($traveller && ($request->password == $traveller->password)) {
            session(['role' => 'traveller']);
            $request->session()->put('traveller', $traveller->role);
            $request->session()->put('traveller_id', $traveller->id);
            $request->session()->put('traveller_firstname', $traveller->firstname);
            $request->session()->put('traveller_lastname', $traveller->lastname);
            $request->session()->put('traveller_dob', $traveller->dob);
            $request->session()->put('traveller_email', $traveller->email);
            $request->session()->put('traveller_phone', $traveller->phone);
            $request->session()->put('traveller_address', $traveller->address);
            $request->session()->put('traveller_nid', $traveller->nid);
            $request->session()->put('traveller_gender', $traveller->gender);
            $Tid = $request->session()->get('Patient_id');
            return redirect('traveller/dashboard');
        }

        // if ($admin && ($request->password == $admin->password)) {
        //     session(['role' => 'admin']);
        //     $request->session()->put('admin', $admin->role);
        //     $request->session()->put('admin_id', $admin->id);
        //     $request->session()->put('admin_firstname', $admin->firstname);
        //     $request->session()->put('admin_lastname', $admin->lastname);
        //     $request->session()->put('admin_dob', $admin->dob);
        //     $request->session()->put('admin_email', $admin->email);
        //     $request->session()->put('admin_phone', $admin->phone);
        //     $request->session()->put('admin_address', $admin->address);
        //     $request->session()->put('admin_nid', $admin->nid);
        //     $request->session()->put('admin_gender', $admin->gender);
        //     $request->session()->put('admin_picture', $admin->picture);
        //     $Aid = $request->session()->get('admin_id');
        //     return redirect('admin/dashboard');
        // } 
        else {
            return back()->with('fail', 'Incorrect email or Password');
        }
    }

    public function index()
    {

        return view('index');
    }


























    public function service()
    {

        return view('service');
    }

    public function about ()
    {

        return view('about');
    }

    public function package()
    {

        return view('package');
    }

    public function contact()
    {

        return view('contact');
    }
}
