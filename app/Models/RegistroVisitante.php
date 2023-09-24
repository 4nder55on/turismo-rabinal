<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RegistroVisitante extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function visitante() : BelongsTo
    {

        return $this->belongsTo(Cliente::class, 'cliente_id');

    }

    public function lugar() : BelongsTo
    {

        return $this->belongsTo(LugarRecreativo::class, 'lugar_id');

    }
}
