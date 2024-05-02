<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Comment;
use App\Models\Demande;
use App\Models\DesactivatedAccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DesactivationEmail;
use App\Mail\activationEmail;
use App\Mail\deletedEmail;

class AdminController extends Controller
{
    public function Clients()
    {
        if (Auth::check() && Auth::user()->type == 'admin') {
            $client = User::where('type', 'client')->get();
            $partnersCount = User::where('type', 'partner')->count();
            $clientsCount = User::where('type', 'client')->count();
            $demandesCount = Demande::count();
            $deactivatedAccountsCount = DesactivatedAccount::count();
        
            $refusedDemandesCount = Demande::where('statut', 'refuser')->count();
            return view('admin.Clients-list', compact('client', 'partnersCount', 'clientsCount', 'demandesCount', 'deactivatedAccountsCount', 'refusedDemandesCount'));
        } else {
            return redirect()->route('login');
        }
    }



    public function  Partenaires()
    {
        if (Auth::check() && Auth::user()->type == 'admin') {

            $partnersCount = User::where('type', 'partner')->count();
            $clientsCount = User::where('type', 'client')->count();
            $demandesCount = Demande::count();
            $deactivatedAccountsCount = DesactivatedAccount::count();
        
            $refusedDemandesCount = Demande::where('statut', 'refuser')->count();
            $Partenaire = User::where('type', 'partner')->get();
            return view('admin.partenaires-list', compact('Partenaire', 'partnersCount', 'clientsCount', 'demandesCount', 'deactivatedAccountsCount', 'refusedDemandesCount'));
        } else {
            return redirect()->route('login');
        }
    }

    
  

    public function Deactivated_Accounts()
    {
        
        if (Auth::check() && Auth::user()->type == 'admin') {
            
            $partnersCount = User::where('type', 'partner')->count();
            $clientsCount = User::where('type', 'client')->count();
            $demandesCount = Demande::count();
            $deactivatedAccountsCount = DesactivatedAccount::count();
        
            $refusedDemandesCount = Demande::where('statut', 'refuser')->count();
           
            $user = DesactivatedAccount::all();
            return view('admin.deactivated-Accounts', compact('user', 'partnersCount', 'clientsCount', 'demandesCount', 'deactivatedAccountsCount', 'refusedDemandesCount'));
        } else {
            return redirect()->route('login');
        }
    }


    public function activateuser(Request $request) {
        // Trouver l'utilisateur à désactiver
        $user = DesactivatedAccount::findOrFail($request->user_id);
        Mail::to($user->email)->send(new activationEmail($user));
        // Supprimer l'utilisateur de la table users
        $user->delete();
      
    
        // Créer une nouvelle entrée dans la table desactivated_accounts avec les mêmes données que l'utilisateur supprimé
        User::create([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
            'type' => $user->type,
            'address' => $user->address,
            'note' => $user->note,
            'photo' => $user->photo,
            // Ajoutez d'autres champs si nécessaire
        ]);
    
        return redirect()->back()->with('success', 'User activated successfully.');
    }



   



    public function  deleteuser(Request $request) {
        // Trouver l'utilisateur à désactiver
        $user = DesactivatedAccount::findOrFail($request->user_id);
        Mail::to($user->email)->send(new deletedEmail($user));
        // Supprimer l'utilisateur de la table users
        $user->delete();
    
        return redirect()->back()->with('success', 'User delete successfully.');
    }



    public function deactivateuser(Request $request) {
        // Trouver l'utilisateur à désactiver
        $user = User::findOrFail($request->user_id);
        Mail::to($user->email)->send(new DesactivationEmail($user));
        
        // Supprimer l'utilisateur de la table users
        $user->delete();
    
        // Créer une nouvelle entrée dans la table desactivated_accounts avec les mêmes données que l'utilisateur supprimé
        DesactivatedAccount::create([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
            'type' => $user->type,
            'address' => $user->address,
            'note' => $user->note,
            'photo' => $user->photo,
            // Ajoutez d'autres champs si nécessaire
        ]);
    
        return redirect()->back()->with('success', 'User deactivated successfully.');
    }
    
    public function deletecomment(Request $request) {
        $comment = Comment::findOrFail($request->comment_id);
        $comment->delete();
        return response()->json(['success' => true]);
    }
    

    public function cancelservice(Request $request) {
       
        $demande= Demande::findOrFail($request->demande_id);
       $demande->delete();
        return redirect()->back()->with('success', 'service successfully.');
    }



    public function Services()
    {
        if (Auth::check() && Auth::user()->type == 'admin') {

            $partnersCount = User::where('type', 'partner')->count();
            $clientsCount = User::where('type', 'client')->count();
            $demandesCount = Demande::count();
            $deactivatedAccountsCount = DesactivatedAccount::count();
        
            $refusedDemandesCount = Demande::where('statut', 'refuser')->count();
            $services = Demande::whereDate('date', '>=', now())
                                ->where('statut', '!=', 'refuser') 
                                ->with('client', 'partenaire', 'service')
                                ->get();
            return view('admin.Services-list',compact('services', 'partnersCount', 'clientsCount', 'demandesCount', 'deactivatedAccountsCount', 'refusedDemandesCount'));
        } else {
            return redirect()->route('login');
        }
    }
    
    

    public function Commentaires()
    {
        if (Auth::check() && Auth::user()->type == 'admin') {

            $partnersCount = User::where('type', 'partner')->count();
            $clientsCount = User::where('type', 'client')->count();
            $demandesCount = Demande::count();
            $deactivatedAccountsCount = DesactivatedAccount::count();
        
            $refusedDemandesCount = Demande::where('statut', 'refuser')->count();
            $demandes = Demande::with('commentaires','service','client','partenaire')->get();
            return view('admin.Comments-list', compact('demandes', 'partnersCount', 'clientsCount', 'demandesCount', 'deactivatedAccountsCount', 'refusedDemandesCount'));
        } else {
            return redirect()->route('login');
        }
    }
    
}
