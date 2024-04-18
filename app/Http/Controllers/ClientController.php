<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function dashboard()
    {
        // return the view for the client dashboard
        return view('client.dashboard');
    }
}
