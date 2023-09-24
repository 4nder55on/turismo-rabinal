<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Encargados extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function lugarRecreativo() : BelongsTo
    {
        return $this->belongsTo(LugarRecreativo::class, 'lugar_id');
    }
}
