<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pqrs extends Model
{
	protected $table = 'pqrs';

	protected $fillable = [
		'nombre',
		'documento',
		'direccion',
		'telefono',
		'email',
		'tipo',
		'descripcion',
		'foto',
		'estado',
	];

	protected $casts = [
		'created_at' => 'datetime',
	];
}
