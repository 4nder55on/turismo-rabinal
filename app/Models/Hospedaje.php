<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hospedaje extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function clientes() : HasMany
    {
        return $this->hasMany(Cliente::class, 'cliente_id');
    }

}
