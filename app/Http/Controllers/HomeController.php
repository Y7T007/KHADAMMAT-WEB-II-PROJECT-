<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Demande;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->type == 'admin') {
                return view('admin.dashboard');
            } else if (Auth::user()->type == 'client') {
                return view('client.home');
            } else {
                return view('Partenaire.home');
            }
        }
    }


    public function Clients()
    {
        if (Auth::check() && Auth::user()->type == 'admin') {
            $client = User::where('type', 'client')->get();
            return view('admin.Clients-list', ['client' => $client]);
        } else {
            // Redirect or return an error response
        }
    }



    public function  Partenaires()
    {
        if (Auth::check() && Auth::user()->type == 'admin') {
            $Partenaire = User::where('type', 'partenaire')->get();
            return view('admin.partenaires-list', ['Partenaire' => $Partenaire]);
        } else {
            // Redirect or return an error response
        }
    }



    public function  Services()
    {
        return 'PAS ENCORE';
    }

    public function  Commentaires()
    {
        return 'PAS ENCORE';
    }
  
    public function notifications() {
        $user_id = Auth::id();
    $notifications = Demande::where('idclient', $user_id)
                             ->where('is_new', 1) // make sure 'is_new' column exists and is correct
                             ->get();

    if (is_null($notifications)) {
        $notifications = collect(); // Ensure it's an empty collection if null
    }

    return view('home', ['notifications' => $notifications]);

    }
    
}
