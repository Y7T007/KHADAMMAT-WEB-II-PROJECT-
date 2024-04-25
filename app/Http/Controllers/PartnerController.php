<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner; // Assurez-vous d'importer le modèle approprié

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all(); // Récupère tous les partenaires depuis la base de données
        return view('client.Partenaires.index', compact('partners')); // Mettez à jour le chemin de la vue
    }
}
