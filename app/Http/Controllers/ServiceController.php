<?php

namespace App\Http\Controllers;

use App\Models\Service;
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
        // Read the JSON file
        $json = file_get_contents('./Services/services.json');

        // Decode the JSON into a PHP object
        $services = json_decode($json);

        // Find the service with the given id
        $service = array_filter($services->services, function ($service) use ($id) {
            return $service->id == $id;
        });

        $service = reset($service);


        $client = Auth::guard('client')->user();


        return view('client.services.show', ['service' => $service])->with('client', $client);
    }
}
