<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'currently_insured',
        'own_house',
        'street_address',
        'zip_code',
        'city',
        'state',
        'home_ownership',
        'phone',
        'email',
    ];
}
