<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarModel extends Model
{
    protected $fillable = ['make_id', 'brand_year_id', 'name'];

    public function make(): BelongsTo
    {
        return $this->belongsTo(Make::class);
    }

    public function brandYear(): BelongsTo
    {
        return $this->belongsTo(BrandYear::class);
    }

    public function trims(): HasMany
    {
        return $this->hasMany(Trim::class);
    }
}
