<?php
// Client model
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    protected $table = 'clients';

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'address',
        'phone_number',
        'profile_picture',
        'ville',
        'date_naissance',
        'genre',
        'nb_chambres',
        'nb_bain',
        'television',
        'refrigirateur',
        'machine_a_laver',
        'autres',
        'Garage',
        'jardin',
        'superficie',
    ];
    public function demandes()
    {
        return $this->hasMany(Demande::class, 'idclient');
    }
}
