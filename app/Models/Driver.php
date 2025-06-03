<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'quote_id',
        'gender',
        'birth_month',
        'birth_day',
        'birth_year',
        'is_married',
        'served_military',
        'is_primary',
        'relationship_to_primary',
        'first_name',
        'last_name',
    ];

    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }
}
