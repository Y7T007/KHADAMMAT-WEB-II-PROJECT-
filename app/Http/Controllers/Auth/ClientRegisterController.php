<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientRegisterController extends Controller
{
    public function showRegistrationForm($step = 1)
    {
        return view('auth.client-auth.register-client-step' . $step);
    }

    public function register(Request $request)
    {

        // validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // create a new client
        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->password = Hash::make($request->password);
        $client->save();

        // log the client in
        Auth::guard('client')->login($client);

        // redirect the client to their dashboard
        return redirect()->route('client.home');
    }

}
