<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReporteController extends Controller
{
	public function create()
	{
		return view('reportes.create');
	}

	public function store(Request $request)
	{
		$data = $request->validate([
			'nombre'          => 'required|string|max:255',
			'documento'       => 'required|string|max:50',
			'direccion'       => 'required|string|max:255',
			'telefono'        => 'required|string|max:50',
			'email'           => 'nullable|email',
			'tipo_incidencia' => 'required|string|max:100',
			'descripcion'     => 'required|string',
			'foto'            => 'nullable|image|max:2048',
		]);

		if ($request->hasFile('foto')) {
			$data['foto'] = $request->file('foto')->store('reportes', 'public');
		}

		Report::create($data);

		return redirect()
			->back()
			->with('success', 'Reporte enviado correctamente.');
	}
}
