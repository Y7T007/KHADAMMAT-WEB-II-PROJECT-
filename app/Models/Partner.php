<?php

// Partner model
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Partner extends Authenticatable
{
    protected $table = 'partners';

    protected $fillable = [
        'name',
        'email',
        'password',
        // Add other partner-specific fields here
    ];
}
