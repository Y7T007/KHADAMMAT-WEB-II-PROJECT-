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
}
