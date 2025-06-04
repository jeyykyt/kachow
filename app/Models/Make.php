<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Make extends Model
{
    protected $fillable = ['name', 'image_path'];

    public function brandYears(): HasMany
    {
        return $this->hasMany(BrandYear::class);
    }

    public function carModels(): HasMany
    {
        return $this->hasMany(CarModel::class);
    }
}
