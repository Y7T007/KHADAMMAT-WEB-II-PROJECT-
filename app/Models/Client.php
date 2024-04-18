<?php
// Client model
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    protected $table = 'clients';

    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone_number',
        'profile_picture',

    ];
}
