<?php

namespace App\Http\Controllers;

use App\Models\SearchIndex;
use Illuminate\Http\Request;

class SearchController extends Controller
{
	public function index(Request $request)
	{
		$q = trim($request->q);
		$resultados = collect();

		if ($q !== '') {

			// FULLTEXT con ranking y prefijo
			$resultados = SearchIndex::selectRaw(
					"search_index.*,
					MATCH(titulo, contenido, keywords) AGAINST(? IN BOOLEAN MODE) AS score",
					[$q . '*']
				)
				->whereRaw(
					"MATCH(titulo, contenido, keywords) AGAINST(? IN BOOLEAN MODE)",
					[$q . '*']
				)
				->orderByDesc('score')
				->get();

			// Fallback por LIKE (si FULLTEXT no devuelve nada)
			if ($resultados->isEmpty()) {
				$resultados = SearchIndex::where('titulo', 'like', "%{$q}%")->orWhere('contenido', 'like', "%{$q}%")->get();
			}
		}

		return view('search.index', compact('q', 'resultados'));
	}
}
