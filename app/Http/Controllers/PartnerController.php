<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Partner; // Make sure to import the correct model

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::with(['user', 'professionalAreas'])->get();
        $client = Auth::guard('client')->user();  // Récupère l'utilisateur connecté
        return view('client.partners.index', compact('partners', 'client'));
    }

    public function show($id)
{
    $partner = Partner::with(['user', 'professionalAreas'])->findOrFail($id);
    $client = Auth::guard('client')->user();  // Récupère l'utilisateur connecté
    return view('client.partner.show', compact('partner' , 'client'));
}


}
