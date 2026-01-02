<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class TarifaDetalle extends Model
{
    protected $fillable = [
        'tarifa_id',
        'componente',
        'cargo_fijo',
        'consumo',
        'vertimiento',
        'activo'
    ];
}
