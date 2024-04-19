<?php

namespace App\Steps;

use Illuminate\Validation\Rule;
use Vildanbina\LivewireWizard\Components\Step;

class Step2 extends Step
{
    protected string $view = 'auth.client-auth.client-register-steps.step2';

    public function icon(): string
    {
        return 'check';
    }

    public function validate()
    {
        return [
            [
                'state.name' => ['required', 'string', 'max:255'],
            ],
            [
                'state.name' => __('Name'),
            ],
        ];
    }

    public function title(): string
    {
        return __('Name');
    }
}
