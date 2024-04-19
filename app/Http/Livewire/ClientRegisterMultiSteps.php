<?php

namespace App\Http\Livewire;

use App\Steps\Step1;
use App\Steps\Step2;
use App\Steps\Step3;
use App\Models\Client;
use Livewire\Component;

class ClientRegisterMultiSteps extends Component
{
    public Client $client;

    public array $steps= [
        Step1::class,
        Step2::class,
        Step3::class,
    ];

    public function mount(): void
    {
        $this->client = new Client();
    }
    public function render()
    {
        return view('auth.client-auth.client-register-steps.step1');
    }
}



