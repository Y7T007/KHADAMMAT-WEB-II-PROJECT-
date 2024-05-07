<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    public function client()
    {

        return $this->belongsTo(User::class, 'idclient');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'idservice');
    }

    public function commentaires()
    {
        return $this->hasMany(Comment::class, 'Demandeid');
    }

    public function partenaire()
    {
        return $this->belongsTo(User::class, 'partenaireid');
    }

    protected $table = 'demandes';
    protected $fillable = [
        'id',
        'idclient',
        'partenaireid',
        'idservice',
        'duree',
        'date',
        'statut',
        'reponse'
    ];

    public function demandes()
    {
        return $this->hasMany(Demande::class, 'partenaireid');
    }
    // Dans le modèle Demande
public function comments()
{
    return $this->hasMany(Comment::class, 'Demandeid');
}

}
