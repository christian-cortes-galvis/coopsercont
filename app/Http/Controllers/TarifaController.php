<?php

namespace App\Http\Controllers;

use App\Models\Tarifa;

class TarifaController extends Controller
{
	public function index()
	{
		return view('tarifas.index', [
			'tarifas' => Tarifa::orderBy('servicio')->orderBy('uso')->orderBy('estrato')->get()->groupBy('servicio')
		]);
	}
}
