<?php

// Partner model
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
        // Add other partner-specific fields here
    ];

    // Define the relationship with the professional areas table
    public function professionalAreas()
    {
        return $this->belongsTo(ProfessionalArea::class, 'expertise_areas');
    }
}
