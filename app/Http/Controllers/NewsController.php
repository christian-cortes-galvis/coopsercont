<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
	public function index()
	{
		$noticias = News::where('activo', true)
			->orderBy('fecha_publicacion', 'desc')
			->get();

		return view('noticias.index', compact('noticias'));
	}

	public function show(News $news)
	{
		abort_if(!$news->activo, 404);

		return view('noticias.show', compact('news'));
	}
}
