<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Partner; // Assurez-vous d'importer le modèle approprié

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::with(['user', 'professionalAreas'])->get();
        $client = Auth::guard('client')->user();  // Récupère l'utilisateur connecté
        return view('client.partners.index', compact('partners', 'client'));
    }
}
