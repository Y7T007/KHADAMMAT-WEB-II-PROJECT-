<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ImageController extends Controller
{
    public function uploadProfilePicture(Request $request, Client $client)
    {
        // Vérifiez si un fichier a été téléchargé
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');

            // Déplacez le fichier téléchargé vers le répertoire de stockage approprié
            $path = $file->store('public/images/profile_pictures');

            // Mettez à jour le chemin de l'image dans la base de données
            $client->profile_picture = str_replace('public/', 'storage/', $path);
            $client->save();

            return redirect()->back()->with('success', 'Profile picture uploaded successfully.');
        }

        return redirect()->back()->with('error', 'No file uploaded.');
    }
}
