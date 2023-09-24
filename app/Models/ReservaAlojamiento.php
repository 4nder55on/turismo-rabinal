<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReservaAlojamiento extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cliente() : BelongsTo
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
    public function hotel() : BelongsTo
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }
}
