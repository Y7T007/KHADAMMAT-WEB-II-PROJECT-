<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function home()
    {
        // get the current logged in client
        $client = Auth::guard('client')->user();

        // return the view for the client dashboard with client data
        return view('client.home')->with('client', $client);
    }

    public function profile()
    {
        $client = Auth::guard('client')->user();

        // return the view for the client profile
        return view('client.profile')->with('client', $client);
    }

    public function editProfile()
    {
        // return the view for the client profile edit
        return view('client.profile-edit');
    }

    public function updateProfile(Request $request)
    {
        // validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // get the current logged in client
        $client = Auth::guard('client')->user();

        // update the client's profile
        $client->name = $request->name;
        $client->email = $request->email;
        $client->password = Hash::make($request->password);
        $client->save();

        // redirect the client to their profile
        return redirect()->route('client.profile');
    }
}
