<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';  // Nom de la table dans la base de données

    // Assurez-vous d'ajouter 'client_id' aux attributs que vous pouvez assigner en masse
    protected $fillable = ['Userid', 'content', 'Note', 'Demandeid', 'client_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'Userid');
    }

    public function demande()
    {
        return $this->belongsTo(Demande::class, 'Demandeid');
    }

    // Ajouter une nouvelle relation pour les clients
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
    
}
