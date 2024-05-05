<?php

namespace App\Http\Controllers;
use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController
{

    public function submitDemand(Request $request)
    {
        $demande = new Demande;
        $demande->idclient = auth()->user()->id; // Assuming the client is the currently authenticated user
        $demande->partenaireid = $request->input('partenaireid'); // You need to pass the partner ID in your form
        $demande->idservice = $request->input('serviceId'); // Assuming the service ID is the value of the sub_service field
        $demande->duree = $request->input('charge_horaire'); // Assuming the duration is the value of the charge_horaire field
        $demande->date = $request->input('demandDate'); // The date of the demand
        $demande->save();

        return response()->json(['message' => 'Demand submitted successfully']);
    }
}
