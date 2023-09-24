<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guia extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tours() : HasMany
    {
        return $this->hasMany(GuiasTours::class, 'guia_id');
    }

}
