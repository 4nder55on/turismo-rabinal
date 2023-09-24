<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GuiasTours extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function guia() : BelongsTo
    {
        return $this->belongsTo(Guia::class, 'guia_id');
    }

}
