<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'business_partners';

    protected $primaryKey = 'partner_id';

    protected $fillable = [
        'company_name',
        'location_city',
        'years_of_experience',
        'availability_status',
        'rate',
        'expertise_areas',
        'user_id',
    ];

    // Définir la relation avec les domaines d'expertise
    public function professionalAreas()
    {
        return $this->belongsToMany(ProfessionalArea::class, 'partner_expertise', 'partner_id', 'area_id');
    }

    // Définir la relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'partenaireid');
    }
}
