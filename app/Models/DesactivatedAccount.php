<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesactivatedAccount extends Model
{
    use HasFactory;
    public function client()
    {
        return $this->hasMany(Service::class, 'idclient');
    }

    public function servicesPartenaire()
    {
        return $this->hasMany(Service::class, 'partenaireid');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'photo',
        'password',
        'address',
         'note' ,
        'type', // Add 'type' to the $fillable array
    ];



    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
