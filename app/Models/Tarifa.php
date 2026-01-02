<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Tarifa extends Model
{
	protected $fillable = ['servicio', 'uso', 'estrato', 'activo'];

	public function detalles()
	{
		return $this->hasMany(TarifaDetalle::class);
	}
}
