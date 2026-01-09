<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
	protected $table = 'reports';

	protected $fillable = [
		'nombre',
		'documento',
		'direccion',
		'telefono',
		'email',
		'tipo_incidencia',
		'descripcion',
		'foto',
		'estado',
	];

	protected $casts = [
		'created_at' => 'datetime',
	];
}
