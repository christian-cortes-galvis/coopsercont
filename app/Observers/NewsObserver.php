<?php

namespace App\Observers;

use App\Models\News;
use App\Models\SearchIndex;

class NewsObserver
{
	public function saved(News $news)
	{
		if (!$news->activo) {
			SearchIndex::where('url', route('noticias.show', $news))->delete();
			return;
		}

		SearchIndex::updateOrCreate(
			['url' => route('noticias.show', $news)],
			[
				'titulo' => $news->titulo,
				'contenido' => strip_tags($news->contenido),
				'tipo' => 'noticia',
			]
		);
	}

	public function deleted(News $news)
	{
		SearchIndex::where('url', route('noticias.show', $news))->delete();
	}
}
