<?php

namespace App\Steps;

use Illuminate\Validation\Rule;
use Vildanbina\LivewireWizard\Components\Step;

class Step1 extends Step
{
    protected string $view = 'auth.client-auth.client-register-steps.step1';

    public function icon(): string
    {
        return 'check';
    }

    public function validate()
    {
        return [
            [
                'state.email' => ['required', 'email', Rule::unique('clients', 'email')],
            ],
            [
                'state.email' => __('Email'),
            ],
        ];
    }

    public function title(): string
    {
        return __('Email');
    }
}
