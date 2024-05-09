<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    function  allServices(){
        // get the current logged in client
        $client = Auth::guard('client')->user();

        // return the view for the client dashboard with client data
        return view('client.services.index')->with('client', $client);
    }
    public function show($id)
    {
        // Fetch the service with the given id from the JSON file
        $json = file_get_contents('./services/services.json');
        $servicesFromJson = json_decode($json);
        $serviceFromJson = array_filter($servicesFromJson->services, function ($service) use ($id) {
            return $service->id == $id;
        });
        $serviceFromJson = reset($serviceFromJson);

        // Fetch the partners that provide this service
        $partners = User::with(['services', 'demandes'])->where('type', 'partner')->get();

        // For each partner, fetch the proposed services and add them to the partners array
        foreach ($partners as $partner) {
            $proposed_services = Service::where('partenaireid', $partner->id)->get();
            $partner->proposed_services = $proposed_services;

            // Fetch the demands for the partner
            $demands = $partner->demandes;

            // Count the number of demands for the selected date
            $demandCount = 0;
            if ($demands) {
                $demandCount = $demands->where('date', request('demandDate'))->count();
            }

            // If the partner already has 3 demands for the selected date, set the availability to the next available date
            if ($demandCount >= 3) {
                $partner->availability = $demands->where('date', '>', request('demandDate'))->min('date');
            } else {
                $partner->availability = request('demandDate');
            }
        }

        $client = Auth::guard('client')->user();

        // Pass the partners to the view
        return view('client.services.show', ['service' => $serviceFromJson, 'partners' => $partners])->with('client', $client);
    }
}
