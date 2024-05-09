<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'client/*',
        'login-client/',
        'register-client/',
        'register-client-step1/',
        'register-client-step2/',
        'register-client-step3/',
        'client/submit-demand/',
        'client/conversation/*',
    ];
}
