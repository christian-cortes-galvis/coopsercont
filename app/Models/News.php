<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $fillable = [
		'titulo',
		'resumen',
		'contenido',
		'fecha_publicacion',
		'imagen',
		'activo',
	];

	protected $casts = [
		'fecha_publicacion' => 'date',
	];
}
