<?php

namespace App\Http\Controllers;

use App\Models\SearchIndex;
use Illuminate\Http\Request;

class SearchController extends Controller
{
	public function index(Request $request)
	{
		$q = trim($request->q);

		$resultados = [];

		if ($q) {
			$resultados = SearchIndex::whereFullText(
				['titulo', 'contenido'],
				$q
			)->get();
		}

		return view('search.index', compact('q', 'resultados'));
	}
}
