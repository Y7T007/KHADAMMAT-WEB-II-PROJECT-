<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfessionalArea extends Model
{
    protected $table = 'professional_areas';

    protected $primaryKey = 'area_id';

    protected $fillable = [
        'domain',
    ];

    // Définir la relation avec les partenaires
    public function partners()
    {
        return $this->belongsToMany(Partner::class, 'partner_expertise', 'area_id', 'partner_id');
    }
}
