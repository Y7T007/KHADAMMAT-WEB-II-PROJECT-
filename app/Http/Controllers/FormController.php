<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function step1()
    {
        return view('auth.client-auth.steps.register-client-step1');
    }

    public function postStep1(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'password' => 'required|string|min:8|confirmed',
            'profile_picture' => 'required|image',
        ]);

//        Log::info('Step 1 data: ', $request->all()); // Log request data


        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->password = Hash::make($request->password);
        $client->profile_picture = $request->file('profile_picture')->store('public/profile_pictures');
        $client->save();

        Auth::guard('client')->login($client);

        return redirect()->route('register-client-step2');
    }

    public function step2()
    {
        return view('auth.client-auth.steps.register-client-step2');
    }

    public function postStep2(Request $request)
    {
        $request->validate([
            'ville' => 'sometimes|string|max:255',
            'address' => 'sometimes|string|max:255',
            'phone_number' => 'sometimes|numeric',
            'date_naissance' => 'sometimes|date',
            'genre' => 'sometimes|in:M,F',
        ]);

        $client = Auth::guard('client')->user();
        $client->ville = $request->ville;
        $client->address = $request->address;
        $client->phone_number = $request->phone_number;
        $client->date_naissance = $request->date_naissance;
        $client->genre = $request->genre;
        $client->save();

        return redirect()->route('register-client-step3');
    }

    public function step3()
    {
        return view('auth.client-auth.steps.register-client-step3');
    }

    public function postStep3(Request $request)
    {
        $request->validate([
            'jardin' => 'sometimes',
            'garage' => 'sometimes',
            'nb_chambres' => 'sometimes',
            'nb_bain' => 'sometimes',
            'television' => 'sometimes',
            'refrigirateur' => 'sometimes',
            'machine_a_laver' => 'sometimes',
            'autres' => 'sometimes',
            'superficie' => 'sometimes',
        ]);

        $client = Auth::guard('client')->user();

        if ($client) {
            $client->jardin = (int)$request->has('jardin');
            $client->garage = (int)$request->has('garage');
            $client->nb_chambres = $request->nb_chambres ?? 0;
            $client->nb_bain = $request->nb_bain ?? 0;
            $client->television = $request->television ?? 0;
            $client->refrigirateur = $request->refrigirateur ?? 0;
            $client->machine_a_laver = $request->machine_a_laver ?? 0;
            $client->superficie = $request->superficie ?? 0;
            $client->save();

            return redirect()->route('client.home');
        } else {
            // Handle the case where the user is not authenticated
            return redirect()->route('client.login');
        }
    }
}
