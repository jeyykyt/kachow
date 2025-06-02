<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BrandYear extends Model
{
    protected $fillable = ['make_id', 'year'];

    public function make(): BelongsTo
    {
        return $this->belongsTo(Make::class);
    }

    public function carModels(): HasMany
    {
        return $this->hasMany(CarModel::class);
    }
}
