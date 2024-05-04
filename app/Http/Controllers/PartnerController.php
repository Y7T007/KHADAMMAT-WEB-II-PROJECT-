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

    public function getPartnersForService(Request $request)
    {
        $serviceId = $request->get('service_id');
        $date = $request->get('date');

        // Get the partners that provide the selected service
        $partners = Partner::whereHas('services', function ($query) use ($serviceId) {
            $query->where('id', $serviceId);
        })->get();

        // Check the availability of each partner
        foreach ($partners as $partner) {
            $servicesCount = $partner->services()->whereDate('created_at', $date)->count();
            $partner->availability = $servicesCount >= 2 ? 'Next day' : 'Available';
        }

        return response()->json($partners);
    }

}
