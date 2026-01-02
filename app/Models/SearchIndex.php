<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SearchIndex extends Model
{
	protected $table = 'search_index';

	protected $fillable = [
		'titulo',
		'contenido',
		'url',
		'tipo',
	];
}
