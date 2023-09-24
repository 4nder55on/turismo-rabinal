<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function hospedajes() : HasMany
    {
        return $this->hasMany(Hospedaje::class, 'cliente_id');
    }

    public function itinerario() : BelongsTo
    {
        return $this->belongsTo(Itinerario::class, 'cliente_id');
    }

    public function reservas() : HasMany
    {
        return $this->hasMany(ReservaAlojamiento::class, 'cliente_id');
    }

    public function resenas() : HasMany
    {
        return $this->hasMany(ResenasCalificaciones::class, 'cliente_id');
    }

    public function registroVisitas() : HasMany
    {
        return $this->hasMany(RegistroVisitante::class, 'cliente_id');
    }


}
