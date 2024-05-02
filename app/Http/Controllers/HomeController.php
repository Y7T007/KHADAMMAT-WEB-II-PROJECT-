<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User; // Assuming User model is in App\Models namespace
use App\Models\Demande; // Assuming Demande model is in App\Models namespace
use Illuminate\Support\Facades\DB;
use App\Models\DesactivatedAccount;
class HomeController extends Controller
{
    public function redirect()
    {
       
        if (Auth::user()->type == 'admin') {
            $partnersCount = User::where('type', 'partner')->count();
            $clientsCount = User::where('type', 'client')->count();
            $demandesCount = Demande::count();
            $deactivatedAccountsCount = DesactivatedAccount::count();
        
            $refusedDemandesCount = Demande::where('statut', 'refuser')->count();
        
            if ($demandesCount > 0) {
                $refusedDemandesPercentage = ($refusedDemandesCount / $demandesCount) * 100;
            } else {
                $refusedDemandesPercentage = 0; // Set percentage to 0 if total demandes count is zero
            }
        
            // Get the top 3 most booked partners
            $mostBookedPartners = DB::table('demandes')
                ->select('partenaireid', DB::raw('COUNT(*) as bookings_count'))
                ->groupBy('partenaireid')
                ->orderByDesc('bookings_count')
                ->limit(3)
                ->get();
        
            // Retrieve additional information about the top 3 most booked partners
            $topBookedPartners = [];
            foreach ($mostBookedPartners as $partner) {
                $partnerInfo = User::select('name', 'email', 'note')
                    ->where('id', $partner->partenaireid)
                    ->withCount('demandes')
                    ->first();
                $topBookedPartners[] = $partnerInfo;
            }



            $activeclients = DB::table('demandes')
            ->select('idclient', DB::raw('COUNT(*) as bookings_count'))
            ->groupBy('idclient')
            ->orderByDesc('bookings_count')
            ->limit(3)
            ->get();
    
        // Retrieve additional information about the top 3 most booked partners
        $mostactivecliens = [];
        foreach ($activeclients as $client) {
            $clientInfo = User::select('name', 'email', 'note')
                ->where('id', $client->idclient)
                ->withCount('demandes')
                ->first();
            $mostactivecliens[] = $clientInfo;
        }
        
            return view('admin.dashboard', compact('partnersCount', 'clientsCount', 'refusedDemandesPercentage', 'demandesCount', 'deactivatedAccountsCount', 'topBookedPartners','mostactivecliens'));
        }
        
             else if (Auth::user()->type == 'client') {
                return view('client.home');
            } else if (Auth::check() && Auth::user()->type == 'partner') {
                    // Retrieve the logged-in user (partner)
                    $partenaire = Auth::user();
            
                    // Retrieve the number of comments and the average rating
                    $comments = Comment::where('Userid', $partenaire->id)->get();
                    $commentCount = $comments->count();
                    $demandCount = Demande::where('partenaireid', $partenaire->id)->count();
                    $totalRating = $comments->sum('Note');
                    $demandesEnAttente = Demande::where('partenaireid', $partenaire->id)
                                ->where('statut', 'en attente')
                                ->get();
                return view('Partenaire.home',compact('partenaire', 'commentCount', 'demandCount','demandesEnAttente'));
            }
        }
    




    }