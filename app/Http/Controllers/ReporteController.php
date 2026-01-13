<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Mail\ReportCreatedMail;
use Illuminate\Support\Facades\Mail;

class ReporteController extends Controller
{
	public function create(Request $request)
	{
		$data = $request->validate([
			'nombre'          => 'required|string|max:255',
			'documento'       => 'required|numeric',
			'direccion'       => 'required|string|max:255',
			'telefono'        => 'required|numeric',
			'email'           => 'nullable|email',
			'tipo_incidencia' => 'required|string|max:100',
			'descripcion'     => 'required|string',
			'foto'            => 'nullable|image|max:1024',
		]);

		if ($request->hasFile('foto')) {
			$data['foto'] = $request->file('foto')->store('reportes', 'public');
		}

		Report::create($data);

		// ENVIAR CORREO
		Mail::to(env('MAIL_REPORTES'))->send(new ReportCreatedMail($data));

		return back()->with('primary', 'Reporte enviado correctamente.');
	}
}
