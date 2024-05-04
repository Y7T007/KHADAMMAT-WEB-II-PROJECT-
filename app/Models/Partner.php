<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{

    protected $table = 'users';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'current_team_id',
        'profile_photo_path',
        'created_at',
        'updated_at',
        'type',
    ];

    public function isPartner()
    {
        return $this->type === 'partner';
    }

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
}
