<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'image',
        'position',
        'facebook',
        'twitter',
        'instagram',
        'whatsapp'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
