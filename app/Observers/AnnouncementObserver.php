<?php

namespace App\Observers;

use App\Models\Announcement;
use App\Models\SearchIndex;

class AnnouncementObserver
{
	public function saved(Announcement $aviso)
	{
		if (!$aviso->activo) {
			SearchIndex::where('url', '/avisos')
				->where('titulo', $aviso->titulo)
				->delete();
			return;
		}

		SearchIndex::updateOrCreate(
			[
				'url' => '/avisos',
				'titulo' => $aviso->titulo,
			],
			[
				'contenido' => $aviso->descripcion,
				'tipo' => $aviso->tipo,
			]
		);
	}

	public function deleted(Announcement $aviso)
	{
		SearchIndex::where('url', '/avisos')
			->where('titulo', $aviso->titulo)
			->delete();
	}
}
