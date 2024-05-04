<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'partenaireid',
        'nom',
        'description',
        'image',
        'categorie',
        'phone',
        'prix',
    ];

    public function partenaire()
    {
        return $this->belongsTo(User::class, 'partenaireid');
    }
}
