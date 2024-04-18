<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientLoginController extends Controller
{
    public function showLoginForm()
    {
        // return the view for the login form
        return view('auth.client-auth.login-client');
    }

    public function login(Request $request)
    {
        // validate the form data
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // attempt to log the client in
        if (Auth::guard('client')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, redirect to their intended location
            return redirect()->intended(route('client.dashboard'));
        }

        // if unsuccessful, redirect back to the login form with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('client')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
