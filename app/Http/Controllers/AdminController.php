<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travelpackages;

class AdminController extends Controller
{

    public function AdminDashboard()
    {

        return view('admin.admin');
    }


    public function createpackage()
    {
        return view('admin.createpackage');
    }

    public function CreatepackagePost(Request $request)
    {

        $request->validate([

            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $package = new Travelpackages();
        $package->name = $request->name;
        $package->type = $request->type;
        $package->description = $request->description;
        $package->price = $request->price;

        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path('uploaded_images'), $filename);
            $package->picture = $filename;
        }

        $result = $package->save();

        if ($result) {
            return redirect()->route('admin/dashboard')->with('success', 'success');
        } else {
            return redirect()->route('admin/dashboard')->with('fail', 'Something Wrong try again');
        }
    }
}
