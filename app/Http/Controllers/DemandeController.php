<?php

namespace App\Http\Controllers;
use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController
{

    public function submitDemand(Request $request)
    {
        $demande = new Demande;
        $demande->idclient = $request->input('idclient');
        $demande->partenaireid = $request->input('partenaireid');
        $demande->idservice = $request->input('serviceId');
        $demande->duree = $request->input('charge_horaire');
        $demande->date = $request->input('demandDate');
        $demande->save();

        return response()->json(['message' => 'Demand submitted successfully']);
    }
}
