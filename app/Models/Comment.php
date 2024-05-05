<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';  // Nom de la table dans la base de données

    protected $fillable = ['Userid', 'content', 'Note', 'Demandeid', 'demande_id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'Userid');
    }

    public function demande()
    {
        return $this->belongsTo(Demande::class, 'Demandeid');
    }
}
