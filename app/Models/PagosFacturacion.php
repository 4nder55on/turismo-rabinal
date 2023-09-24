<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PagosFacturacion extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function reserva() : BelongsTo
    {
        return $this->belongsTo(ReservaAlojamiento::class, 'reserva_id');
    }
}
