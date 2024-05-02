<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'id',
        'content',
        'Note',
        'Userid',
        'Demandeid'
      
    ];
    use HasFactory;

   
    public function User()
    {
        return $this->belongsTo(User::class, 'Userid');
    }

    public function demande()
    {
        return $this->belongsTo(Demande::class, 'Demandeid');
    }
    


}
