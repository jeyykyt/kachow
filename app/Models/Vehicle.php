<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'quote_id',
        'make_id',
        'car_model_id',
        'trim_name',
        'year',
        'owns_this',
    ];

    // If you want relationships (optional):
    public function make()
    {
        return $this->belongsTo(Make::class);
    }

    public function model()
    {
        return $this->belongsTo(CarModel::class, 'car_model_id');
    }

    public function trim()
    {
        return $this->belongsTo(Trim::class);
    }
}
