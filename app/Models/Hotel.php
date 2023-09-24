<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function reservas() : HasMany
    {
        return $this->hasMany(ReservaAlojamiento::class, 'hotel_id');
    }
}
