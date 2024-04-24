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
        $client = Auth::guard('client')->user();
        return view('client.profile_edit', compact('client'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'address' => 'sometimes|nullable|string|max:255',
            'phone_number' => 'sometimes|nullable|integer',
            'ville' => 'sometimes|nullable|string|max:50',
            'date_naissance' => 'sometimes|nullable|date',
            'genre' => 'sometimes|nullable|string|max:10',
            'nb_chambres' => 'sometimes|nullable|integer',
            'nb_bain' => 'sometimes|nullable|integer',
            'television' => 'sometimes|nullable|boolean',
            'refrigirateur' => 'sometimes|nullable|boolean',
            'machine_a_laver' => 'sometimes|nullable|boolean',
            'Garage' => 'sometimes|nullable|boolean',
            'jardin' => 'sometimes|nullable|boolean',
            'superficie' => 'sometimes|nullable|integer',
            'profile_picture' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $client = Auth::guard('client')->user();

        if ($request->has('name') && !is_null($request->name) && $client->name != $request->name) {
            $client->name = $request->name;
        }
        if ($request->has('address') && !is_null($request->address) && $client->address != $request->address) {
            $client->address = $request->address;
        }
        if ($request->has('phone_number') && !is_null($request->phone_number) && $client->phone_number != $request->phone_number) {
            $client->phone_number = $request->phone_number;
        }
        if ($request->has('ville') && !is_null($request->ville) && $client->ville != $request->ville) {
            $client->ville = $request->ville;
        }
        if ($request->has('date_naissance') && !is_null($request->date_naissance) && $client->date_naissance != $request->date_naissance) {
            $client->date_naissance = $request->date_naissance;
        }
        if ($request->has('genre') && !is_null($request->genre) && $client->genre != $request->genre) {
            $client->genre = $request->genre;
        }
        if ($request->has('nb_chambres') && !is_null($request->nb_chambres) && $client->nb_chambres != $request->nb_chambres) {
            $client->nb_chambres = $request->nb_chambres;
        }
        if ($request->has('nb_bain') && !is_null($request->nb_bain) && $client->nb_bain != $request->nb_bain) {
            $client->nb_bain = $request->nb_bain;
        }
        if ($request->has('television') && !is_null($request->television) && $client->television != $request->television) {
            $client->television = $request->television;
        }
        if ($request->has('refrigirateur') && !is_null($request->refrigirateur) && $client->refrigirateur != $request->refrigirateur) {
            $client->refrigirateur = $request->refrigirateur;
        }
        if ($request->has('machine_a_laver') && !is_null($request->machine_a_laver) && $client->machine_a_laver != $request->machine_a_laver) {
            $client->machine_a_laver = $request->machine_a_laver;
        }
        if ($request->has('Garage') && !is_null($request->Garage) && $client->Garage != $request->Garage) {
            $client->Garage = $request->Garage;
        }
        if ($request->has('jardin') && !is_null($request->jardin) && $client->jardin != $request->jardin) {
            $client->jardin = $request->jardin;
        }
        if ($request->has('superficie') && !is_null($request->superficie) && $client->superficie != $request->superficie) {
            $client->superficie = $request->superficie;
        }
        if ($request->hasFile('profile_picture') && !is_null($request->profile_picture)) {
            $profilePicturePath = $request->file('profile_picture')->store('public/profile_pictures');
            $client->profile_picture = str_replace('public/', '', $profilePicturePath);
        }


        $client->save();

        return redirect()->route('client.profile')->with('success', 'Profil mis à jour avec succès!');
    }


    }
