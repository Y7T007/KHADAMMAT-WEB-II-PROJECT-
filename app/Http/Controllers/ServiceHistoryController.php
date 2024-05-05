<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ServiceHistoryController extends Controller
{
    public function index()
    {
        // Assurez-vous que l'utilisateur est connecté et récupérez son ID
        $clientId = Auth::id();

        // Récupérez toutes les demandes de services pour ce client
        $demandes = Service::where('client_id', $clientId)->get();

        // Renvoyez à la vue avec les données des demandes
        return view('client.service_history', compact('demandes'));
    }
}
