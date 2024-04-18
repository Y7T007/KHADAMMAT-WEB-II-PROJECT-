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
    'address'
// Add other client-specific fields here
];
}
