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
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|integer',
            'ville' => 'nullable|string|max:50',
            'date_naissance' => 'nullable|date',
            'genre' => 'nullable|string|max:10',
            'nb_chambres' => 'nullable|integer',
            'nb_bain' => 'nullable|integer',
            'television' => 'nullable|boolean',
            'refrigirateur' => 'nullable|boolean',
            'machine_a_laver' => 'nullable|boolean',
            'Garage' => 'nullable|boolean',
            'jardin' => 'nullable|boolean',
            'superficie' => 'nullable|integer',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajout de la validation pour l'image
        ]);
    
        $client = Auth::guard('client')->user();
        $client->name = $request->name;
        $client->address = $request->address;
        $client->phone_number = $request->phone_number;
        $client->ville = $request->ville;
        $client->date_naissance = $request->date_naissance;
        $client->genre = $request->genre;
        $client->nb_chambres = $request->nb_chambres;
        $client->nb_bain = $request->nb_bain;
        $client->television = $request->has('television');
        $client->refrigirateur = $request->has('refrigirateur');
        $client->machine_a_laver = $request->has('machine_a_laver');
        $client->Garage = $request->has('Garage');
        $client->jardin = $request->has('jardin');
        $client->superficie = $request->superficie;
    
        // Vérifie si une nouvelle image a été téléchargée
        if ($request->hasFile('profile_picture')) {
            // Stocke le fichier dans le dossier public/profile_pictures
            $profilePicturePath = $request->file('profile_picture')->store('public/profile_pictures');
            // Enregistre le chemin de l'image dans la base de données
            $client->profile_picture = str_replace('public/', '', $profilePicturePath);
        }
    
        $client->save();
    
        return redirect()->route('client.profile')->with('success', 'Profil mis à jour avec succès!');
    }
        
    
    }
