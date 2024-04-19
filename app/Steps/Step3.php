<?php

namespace App\Steps;

use App\Models\Client;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Vildanbina\LivewireWizard\Components\Step;

class Step3 extends Step
{
    protected string $view = 'auth.client-auth.client-register-steps.step3';

    public function icon(): string
    {
        return 'check';
    }

    public function save($state)
    {
        $user = Client::create([
            'name' => $state['name'],
            'email' => $state['email'],
            'password' => Hash::make($state['password']),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function validate()
    {
        return [
            [
                'state.password' => ['required', 'confirmed', Rules\Password::defaults()],
            ],
            [
                'state.password' => __('Password'),
            ],
        ];
    }

    public function title(): string
    {
        return __('Password');
    }
}
