<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'consultancy_id',
    ];

    public function consultancy()
    {
        return $this->belongsTo(Consultancy::class);
    }
}
