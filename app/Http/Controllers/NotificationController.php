<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index() {
        $user_id = Auth::id();  // Assurez-vous que l'utilisateur est connecté
        $notifications = Demande::where('idclient', $user_id)
                                 ->where('is_new', 1)  // Assumant que 'is_new' indique les nouvelles notifications
                                 ->get();

        return view('client.notifications', compact('notifications')); // Assurez-vous que la vue existe
    }
}
