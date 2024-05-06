<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Comment;
use App\Models\Rating;
use App\Models\Demande;
class ClientController extends Controller
{
    public function home()
    {
        // get the current logged in client
        $client = Auth::guard('client')->user();

        // return the view for the client dashboard with client data
        return view('client.home')->with('client', $client);
    }


    public function feed()
    {
        // get the current logged in client
        $client = Auth::guard('client')->user();

        // Fetch the demanded services by the client
        $demandedServices = Demande::with(['service', 'commentaires', 'client', 'partenaire'])
            ->where('idclient', $client->id)
            ->get();

        // Fetch the services provided by all partners
        $providedServices = Service::with('partenaire')->get();

        // return the view for the client dashboard with client data
        return view('client.feed', compact('client', 'demandedServices', 'providedServices'));
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
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:10', // Modifié pour accepter les numéros de téléphone
            'ville' => 'nullable|string|max:50',
            'date_naissance' => 'nullable|date',
            'genre' => 'nullable|string|max:6', // Modifié pour une longueur maximale de 6 caractères
            'nb_chambres' => 'nullable|integer',
            'nb_bain' => 'nullable|integer',
            'television' => 'nullable|boolean',
            'refrigirateur' => 'nullable|boolean',
            'machine_a_laver' => 'nullable|boolean',
            'Garage' => 'nullable|boolean',
            'jardin' => 'nullable|boolean',
            'superficie' => 'nullable|integer',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $client = Auth::guard('client')->user();

        // Mettre à jour les données du client avec les valeurs des champs du formulaire
        $client->update([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone_number'),
            'ville' => $request->input('ville'),
            'date_naissance' => $request->input('date_naissance'),
            'genre' => $request->input('genre'),
            'nb_chambres' => $request->input('nb_chambres'),
            'nb_bain' => $request->input('nb_bain'),
            'superficie' => $request->input('superficie'),
        ]);

        // Traitement spécial pour les valeurs des cases à cocher
        $television = $request->has('television') ? 1 : 0;
        $refrigirateur = $request->has('refrigirateur') ? 1 : 0;
        $machine_a_laver = $request->has('machine_a_laver') ? 1 : 0;
        $Garage = $request->has('Garage') ? 1 : 0;
        $jardin = $request->has('jardin') ? 1 : 0;

        // Mettre à jour les valeurs des cases à cocher dans la base de données
        $client->update([
            'television' => $television,
            'refrigirateur' => $refrigirateur,
            'machine_a_laver' => $machine_a_laver,
            'Garage' => $Garage,
            'jardin' => $jardin,
        ]);

        // Traitement spécial pour l'image de profil
        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('public/profile_pictures');
            $client->profile_picture = str_replace('public/', '', $profilePicturePath);
        }

        // Enregistrer les modifications dans la base de données
        $client->save();

        return redirect()->route('client.profile')->with('success', 'Profil mis à jour avec succès!');
    }

    public function serviceHistory()
    {
        $client_id = Auth::guard('client')->user()->id;
        $client = Auth::guard('client')->user(); // Assurez-vous de récupérer l'utilisateur connecté
        $demandes = \App\Models\Demande::with(['service', 'partenaire'])
            ->where('idclient', $client_id)
            ->get();

        return view('client.service_history', compact('demandes', 'client')); // Passez 'client' à la vue
    }



    public function saveComment(Request $request, $demandeId)
{
    $request->validate([
        'comment' => 'required|string|max:255',
    ]);

    $comment = new Comment();
    $comment->demandeid = $demandeId;
    $comment->content = $request->comment;
    $comment->save();

    return redirect()->back()->with('success', 'Commentaire ajouté avec succès!');
}


public function saveRating(Request $request, $demandeId)
{
    $request->validate([
        'rating' => 'required|integer|min:1|max:5',
    ]);

    // Trouver la demande associée ou échouer si non trouvée
    $demande = Demande::findOrFail($demandeId);

    // Créer ou mettre à jour le commentaire associé à la demande
    $comment = Comment::updateOrCreate(
        ['Demandeid' => $demandeId],  // Conditions pour trouver l'entrée existante
        ['Note' => $request->rating, 'Userid' => Auth::id()]  // Champs à créer/mettre à jour
    );

    return redirect()->back()->with('success', 'Note enregistrée avec succès!');
}

}
