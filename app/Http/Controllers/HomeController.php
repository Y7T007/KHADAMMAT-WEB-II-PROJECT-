<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

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
}
