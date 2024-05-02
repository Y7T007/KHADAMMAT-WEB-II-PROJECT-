<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Demande;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\AcceptanceEmail;
use App\Mail\RefuseanceEmail;
use App\Mail\PartnerFeedbackEmail;
use App\Mail\ClientFeedbackEmail;

use App\Mail\PartnerCommentNotification;
use App\Mail\ClientCommentNotification;

class Partenaire extends Controller
{

    public function redirecttoprofile()
    {
        // Check if the user is authenticated and is of type 'partner'
        if (Auth::check() && Auth::user()->type == 'partner') {
            // Retrieve the logged-in user (partner)
            $partenaire = Auth::user();
    
            // Retrieve the number of comments and the average rating
            $comments = Comment::where('Userid', $partenaire->id)->get();
            $commentCount = $comments->count();
    
            $totalRating = $comments->sum('Note');
            $averageRating = $commentCount > 0 ? round($totalRating / $commentCount, 1) : 0;
    
            // Pass the partner's data, the number of comments, and the average rating to the view
            return view('Partenaire.Profile', compact('partenaire', 'commentCount', 'averageRating'));
        } else {
                return redirect()->route('login');
            }
        
    }
    

    public function showTabcalender()
    {
        return view('Partenaire.table-calendar');
    }

    public function showchat()
    {
        return view('Partenaire.app-chat');
    }

    public function showTableBasic()
    {
        return view('Partenaire.table-basic');
    }

    public function showTableDarkBasic()
    {
        return view('Partenaire.table-dark-basic');
    }

    public function showTableDatatableBasic()
    {
        return view('Partenaire.table-datatable-basic');
    }

    public function showTableLayoutColoured()
    {
        return view('Partenaire.table-layout-coloured');
    }

    public function showTableSizing()
    {
        return view('Partenaire.table-sizing');
    }



    public function showTicketList()
    {
        $user = Auth::user(); 
        $partenaireId = $user->id; 

      
        $demandes = Demande::with('client', 'service')
        ->where('partenaireid', $partenaireId)
        ->where('statut', 'EnAttente')
        ->get();

        
        return view('Partenaire.Interventions', ['demandes'=>$demandes]);
    }


    
    public function acceptService(Request $request) {
       
        $user = User::findOrFail($request->user_id);
        $client = User::findOrFail($request->client_id);
        $demande = Demande::findOrFail($request->service_id);
    
        // Send email to authenticated user
        Mail::to($user->email)->send(new AcceptanceEmail($user,$client,$demande));
    
        // Send email to client
        Mail::to($client->email)->send(new AcceptanceEmail($client,$user,$demande));
  
      
    

        // Update the status of the demandes record to "accepter"
        $demande->statut = 'accepter';
        $demande->save();
        // Other logic to handle accepting the service
    
        return redirect()->back()->with('success', 'Service accepted successfully.');
    }





    public function refuseservice(Request $request) {
       
        $user = User::findOrFail($request->user_id);
        $client = User::findOrFail($request->client_id);
        $demande = Demande::findOrFail($request->service_id);
        Mail::to($client->email)->send(new RefuseanceEmail($client,$user,$demande));
        $demande->statut = 'refuser';
        $demande->save();
        return redirect()->back()->with('success', 'Service Refused successfully.');
    }
    
    

    public function showFormInputGrid()
    {
        return view('Partenaire.form-input-grid');
    }

    public function showFormInputs()
    {
        return view('Partenaire.form-inputs');
    }

    public function showSidebar()
    {
        return view('Partenaire.sidebar');
    }

    public function showUICards()
    {
        return view('Partenaire.ui-cards');
    }

    public function showUIListMedia()
    {
        return view('Partenaire.ui-list-media');
    }

    public function showUIPopover()
    {
        return view('Partenaire.ui-popover');
    }


    public function UpdateProfile()
    {

        $partenaire = auth()->user();

        // Passer les informations du partenaire à la vue
        return view('Partenaire.UpdateProfile', compact('partenaire'));
    }

    public function appcalendar()
    {

        return view('Partenaire.app-calendar');
    }

    public function showcomment()
    {
        // Récupérer l'utilisateur connecté (partenaire)
        $user = auth()->user();
        
        // Vérifier si le partenaire a déjà laissé un commentaire sur ce service
        $partnerCommentCount = Comment::where('Userid', $user->id)->count();
        
        // Calculer la date d'il y a 7 jours
        $sevenDaysAgo = now()->subDays(7)->toDateString();
    
        // Récupérer les commentaires correspondant aux critères avec les informations supplémentaires
        $comments = Comment::with(['User', 'demande'])
                    ->where('Userid', '!=', $user->id) // Exclure les commentaires du partenaire lui-même
                    ->where('Demandeid', $user->id)
                    ->when($partnerCommentCount > 0, function ($query) use ($user) {
                        // Si le partenaire a déjà laissé un commentaire, afficher le commentaire du client
                        $query->orWhere('Userid', '!=', $user->id);
                    })
                    ->orWhereHas('demande', function ($query) use ($sevenDaysAgo) {
                        // Filtrer les demandes où la date est strictement inférieure à la date d'il y a 7 jours
                        $query->where('date', '<', $sevenDaysAgo);
                    })
                    ->get();
    
        return view('Partenaire.comment', compact('comments'));
    }
    
    
    

    public function addservice()
    {

        return view('Partenaire.AddService');
    }



    public function messervices()
    {

        // Récupérer l'utilisateur connecté (le partenaire)
        $partenaire = auth()->user();

        // Récupérer tous les services de l'utilisateur connecté
        $services = Service::where('partenaireid', $partenaire->id)->get();

        // Passer les services à la vue 'MesServices'
        return view('Partenaire.MesServices', compact('services'));
    }



    public function service()
    {

        return view('Partenaire.service');
    }

    public function updateService($id)
    {
        $service = Service::find($id);
        return view('Partenaire.updateService', compact('service'));
    }


    public function AjouterComment($commentId)
    {
        // Récupérer le commentaire en fonction de son identifiant
        $comment = Comment::findOrFail($commentId);

        // Passer les détails du commentaire à la vue
        return view('Partenaire.AjouterComment', compact('comment'));
    }


    

    public function RateComment(Request $request)
    {
        // Validate the request data
        $request->validate([
            'content' => 'required|string',
            'rating' => 'required|integer|between:1,5', // Adjust validation rules as needed
            'user_id' => 'required|exists:users,id', // Ensure the user exists in the database
            'demande_id' => 'required|exists:demandes,id',
            // Add any other validation rules if necessary
        ]);
    
        // Retrieve data from the request
        $content = $request->input('content');
        $rating = $request->input('rating');
        $userId = $request->input('user_id');
        $clientId = $request->input('client_id');
        $demandeId = $request->input('demande_id');
    
        // Create a new comment instance
        $comment = new Comment();
        $comment->content = $content;
        $comment->Note = $rating;
        $comment->Userid = $userId;
        $comment->Demandeid = $demandeId;
        // Save the comment to the database
        $comment->save();
        $client = User::findOrFail($clientId);
        $user = User::findOrFail($userId);
        // Calculate the new average rating
        $totalRating = $client->rating_count * $client->Note;
        $totalRating += $rating;
        $client->rating_count += 1;
        $client->Note = $totalRating / $client->rating_count;
    
        // Save the updated user data
        $client->save();

         

        $clientCommentCount = Comment::where('Userid', $clientId)->where('Demandeid', $demandeId)->count();
         

        if ($clientCommentCount > 0) {
            // Client has already left a comment, send emails to both user (partner) and client
            Mail::to($user->email)->send(new PartnerFeedbackEmail($user, $client));
            Mail::to($client->email)->send(new ClientFeedbackEmail($client, $user));
        } else {
            // Client has not left a comment yet, send email to user (partner) only
            Mail::to($user->email)->send(new PartnerCommentNotification($user, $client));
            Mail::to($client->email)->send(new ClientCommentNotification($user, $client));
        }
    


    
        // Optionally, you can return a response indicating success
        return response()->json(['message' => 'Comment and rating saved successfully'], 200);
    }

 

    public function feedback()
    {
        if (Auth::check() && Auth::user()->type == 'partner') {
            $userId = Auth::id();
            
            // Obtenez la date d'aujourd'hui
            $today = now()->toDateString();
            $sevenDaysAgo = now()->subDays(7)->toDateString();
            // Récupérez les demandes acceptées pour l'utilisateur actuel
            $feedbacks = Demande::where('partenaireid', $userId)
                ->where('statut', 'accepter')
                ->whereDate('date', '<', $today) // Date dans la table demande <= aujourd'hui
                ->whereRaw('DATE_ADD(date, INTERVAL 7 DAY) >= CURDATE()') // Date dans la table demande + 7 jours >= aujourd'hui
                ->whereDoesntHave('commentaires', function ($query) use ($userId) {
                    $query->where('userid', $userId);
                })
                ->get();
            return view('Partenaire.Feedback', compact('feedbacks'));
        }
    }
    




    // update UpdateProfile

    public function updateprof(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mot_de_passe' => 'nullable|string|min:8',
            'metier' => 'nullable|string|max:255',
            'ville' => 'nullable|string|max:255',
            'annees_experience' => 'nullable|integer',
            'adresse' => 'nullable|string|max:255',

            'image' => 'nullable|image|max:2048', // Validez le téléchargement d'images si nécessaire
        ]);

        // Récupérer l'utilisateur connecté (partenaire)
        $partenaire = auth()->user();

        // Mettre à jour les informations du partenaire avec les données du formulaire
        $partenaire->name = $request->input('nom');
        $partenaire->prenom = $request->input('prenom');
        $partenaire->email = $request->input('email');
        if ($request->has('mot_de_passe')) {
            $partenaire->password = Hash::make($request->input('mot_de_passe'));
        }
        $partenaire->metier = $request->input('metier');
        $partenaire->ville = $request->input('ville');
        $partenaire->annee_experience = $request->input('annees_experience');
        $partenaire->address = $request->input('adresse');


        // Télécharger et enregistrer l'image si elle est fournie
        if ($request->hasFile('image')) {
            // Générez un nom unique pour l'image en combinant le timestamp actuel et l'extension de fichier originale
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();

            // Déplacez l'image vers le répertoire de destination sur votre serveur
            $imagePath = $request->file('image')->move('public/images/Partenaire', $imageName);

            // Stockez le nom du fichier dans le modèle de partenaire
            $partenaire->photo = $imageName;
        }

        // Enregistrer les modifications dans la base de données
        $partenaire->save();

        // Rediriger avec un message de succès ou toute autre logique nécessaire
        return redirect()->back()->with('success', 'Profil mis à jour avec succès.');
    }



    //ajouter service

    public function ajouterService(Request $request)
    {
        // Validez les données du formulaire
        $request->validate([
           
            'description' => 'required|string',
            'categorie' => 'required|string|max:255',
            'service' => 'required|string|max:255', // Nouvelle validation pour le champ de sélection du service
            'prix' => 'required|numeric',
        ]);
    
        // Créez un nouvel objet Service et remplissez-le avec les données du formulaire
        $service = new Service();
        $service->nom = $request->service;
        $service->description = $request->description;
        $service->categorie = $request->categorie;
       
        $service->prix = $request->prix;
    
        // Assignez l'ID de l'utilisateur connecté au champ partenaireid
        $service->partenaireid = Auth::id();
    
        $existingService = Service::where('nom', $request->service)
        ->where('partenaireid', Auth::id())
        ->exists();
        error_log('existingService: ' . $existingService);
        if ($existingService) {
          
         
            // If the service already exists, redirect back with an error message
            return response()->json(['error' => 'Service already exists.'], 422);
                 }
                 else{
        $service->save();
        // Redirigez avec un message de succès ou toute autre logique nécessaire
        return response()->json(['success' => 'Service added successfully.'], 200);}
    }


    public function voirService($id)
    {
        // Récupérer le service correspondant à l'ID
        $service = Service::findOrFail($id);

        // Passer le service à la vue 'Service' pour afficher ses détails
        return view('Partenaire.service', compact('service'));
    }


    //update service 

    public function updateServiceSubmit(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'description' => 'required|string',
            'prix' => 'required|numeric',
        ]);
    
        // Check if either description or prix is empty
        if (empty($request->input('description')) || empty($request->input('prix'))) {
            return response()->json(['error' => 'Description and prix fields are required.'], 422);
        }
    
        // Find the service by ID
        $service = Service::find($id);
    
        // Update the service with the provided data
        $service->description = $request->input('description');
        $service->prix = $request->input('prix');
    
        // Save the changes to the database
        $service->save();
    
        // Return success response
        return response()->json(['success' => 'Service updated successfully.'], 200);
    }
    



    // store comment de partenaire

    public function storeComment(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'content' => 'required|string',
            'clientid' => 'required|exists:users,id',
            'partenaireid' => 'required|exists:users,id',
        ]);

        // Créer un nouveau commentaire
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->clientid = $request->input('clientid');
        $comment->partenaireid = $request->input('partenaireid');
        $comment->Note = $request->input('note'); // Récupérer la valeur de la note à partir de la requête

        // Enregistrer le commentaire dans la base de données
        $comment->save();


        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Commentaire ajouté avec succès.');
    }


    //supprimer service

    public function supprimerService($id)
    {
        // Trouver le service à supprimer
        $service = Service::findOrFail($id);

        // Supprimer le service
        $service->delete();

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Service supprimé avec succès.');
    }
}
