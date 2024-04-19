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
    public function registerStep1(Request $request)
    {
        $request->validate([
            'profilepicture' => 'required|image',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Store the file and get its path
        $path = $request->file('profilepicture')->store('profilepictures');

        // Get all the request data
        $data = $request->all();

        // Replace the profilepicture with the file path
        $data['profilepicture'] = $path;

        // Store the data in the session
        $request->session()->put('register_data.step1', $data);

        return view('auth.client-auth.register-client-step2');
    }

    public function registerStep2(Request $request)
    {
        $request->validate([
            'ville' => 'required|string',
            'address' => 'required|string',
            'GSM' => 'required|string',
            'Date_naissance' => 'required|date',
            'Genre' => 'required|string',
        ]);

        $request->session()->put('register_data.step2', $request->all());

        return view('auth.client-auth.register-client-step3');
    }

    public function registerStep3(Request $request)
    {
        $request->validate([
            'Maison' => 'required|string',
            'Jardin' => 'required|string',
            'Garage' => 'required|string',
            'Nb_Chambres' => 'required|integer',
            'Nb_Bain' => 'required|integer',
            'Appareil_electriques' => 'required|string',
        ]);

        $request->session()->put('register_data.step3', $request->all());

        $register_data = $request->session()->get('register_data');

        // create a new client
        $client = new Client();
        $client->name = $register_data['step1']['name'];
        $client->email = $register_data['step1']['email'];
        $client->password = Hash::make($register_data['step1']['password']);
        // Add other fields here
        $client->save();

        // log the client in
        Auth::guard('client')->login($client);

        // redirect the client to their dashboard
        return redirect()->route('client.home');
    }
}
