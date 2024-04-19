<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientRegisterController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            // Other validation rules
        ]);

        // Handle the registration process

        return redirect()->route('client.register.step1');
    }
    public function showRegistrationForm()
    {
        return view('auth.client-auth.register-client');
    }

    public function registerStep1(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'password' => 'required|string|min:8|confirmed',
            'profile_picture' => 'required|image',
        ]);

        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->password = Hash::make($request->password);
        $client->profile_picture = $request->file('profile_picture')->store('profile_pictures');
        $client->save();

        Auth::guard('client')->login($client);

        return redirect()->route('client.register.step2');
    }

    public function registerStep2(Request $request)
    {
        $request->validate([
            'ville' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|numeric',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:M,F',
        ]);

        $client = Auth::guard('client')->user();
        $client->ville = $request->ville;
        $client->address = $request->address;
        $client->phone_number = $request->phone_number;
        $client->date_of_birth = $request->date_of_birth;
        $client->gender = $request->gender;
        $client->save();

        return redirect()->route('client.register.step3');
    }

    public function registerStep3(Request $request)
    {
        $request->validate([
            'maison' => 'required|string|max:255',
            'jardin' => 'required|boolean',
            'garage' => 'required|boolean',
            'nb_chambres' => 'required|integer',
            'nb_bain' => 'required|integer',
            'appareil_electriques' => 'required|string|max:255',
        ]);

        $client = Auth::guard('client')->user();
        $client->maison = $request->maison;
        $client->jardin = $request->jardin;
        $client->garage = $request->garage;
        $client->nb_chambres = $request->nb_chambres;
        $client->nb_bain = $request->nb_bain;
        $client->appareil_electriques = $request->appareil_electriques;
        $client->save();

        return redirect()->route('client.home');
    }
}
