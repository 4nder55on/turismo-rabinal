<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ResenasCalificaciones extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function usuario() : BelongsTo
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function lugar() : BelongsTo
    {
        return $this->belongsTo(LugarRecreativo::class, 'lugar_id');
    }
}
