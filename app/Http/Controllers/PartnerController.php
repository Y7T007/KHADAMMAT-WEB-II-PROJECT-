<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Partner;
use App\Models\Service;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = User::with(['services'])->where('type', 'partner')->get();
        $client = Auth::guard('client')->user();
        return view('client.partners.index', compact('partners', 'client'));
    }

    public function show($id)
    {
        $partner = User::with(['services'])->where('type', 'partner')->findOrFail($id);
        $client = Auth::guard('client')->user();  // Récupère l'utilisateur connecté
        return view('client.partner.show', compact('partner' , 'client'));
    }

    public function getPartnersForService(Request $request)
    {
        $serviceName = $request->get('service');

        // Log the requested service
        \Log::info('Requested service: ' . $serviceName);

        // Get the service with the given name
        $service = Service::where('nom', $serviceName)->first();

        if ($service) {
            // Get the partner that provides the selected service
            $partner = User::where('id', $service->partenaireid)->first();

            if ($partner) {
                // Return the partner as a JSON response
                return response()->json(['partner' => $partner]);
            } else {
                // No partner found for the given service
                return response()->json(['error' => 'No partner found for the given service'], 404);
            }
        } else {
            // No service found with the given name
            return response()->json(['error' => 'No service found with the given name'], 404);
        }
    }
}
