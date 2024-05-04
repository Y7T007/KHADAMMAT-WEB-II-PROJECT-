<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Partner; // Make sure to import the correct model

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::with('user')->get();
        $client = Auth::guard('client')->user();  // Get the logged in user

        // Fetch professional areas from the JSON file
        $json = file_get_contents(public_path('Services/services.json'));
        $services = json_decode($json, true)['services'];

        return view('client.partners.index', compact('partners', 'client', 'services'));
    }

    public function show($id)
    {
        $partner = Partner::with('user')->findOrFail($id);
        if (!$partner->isPartner()) {
            abort(404); // Or any other handling when the user is not a partner
        }
        $client = Auth::guard('client')->user();  // Get the logged in user

        // Fetch professional areas from the JSON file
        $json = file_get_contents(public_path('Services/services.json'));
        $services = json_decode($json, true)['services'];

        return view('client.partner.show', compact('partner' , 'client', 'services'));
    }
}
