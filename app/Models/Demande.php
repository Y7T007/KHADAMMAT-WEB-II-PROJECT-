<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $fillable = ['idclient', 'partenaireid', 'idservice', 'duree', 'date', 'statut', 'Note'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'idservice');
    }

    public function partenaire()
    {
        return $this->belongsTo(User::class, 'partenaireid');
    }
}
