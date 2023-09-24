<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LugarRecreativo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function resenas() : HasMany
    {
        return $this->hasMany(ResenasCalificaciones::class, 'lugar_id');
    }

    public function visitantes() : HasMany
    {
        return $this->hasMany(RegistroVisitante::class, 'lugar_id');
    }

    public function encargados() : HasMany
    {
        return $this->hasMany(Encargados::class, 'lugar_id');
    }
}
