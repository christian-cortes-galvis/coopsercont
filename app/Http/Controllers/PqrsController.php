<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use Illuminate\Http\Request;
use App\Mail\PqrsCreatedMail;
use Illuminate\Support\Facades\Mail;

class PqrsController extends Controller
{
	public function create(Request $request)
	{
		$data = $request->validate([
			'nombre'      => 'required|string|max:255',
			'documento'   => 'required|string|max:50',
			'direccion'   => 'required|string|max:255',
			'telefono'    => 'required|string|max:50',
			'email'       => 'nullable|email',
			'tipo'        => 'required|string|max:100',
			'descripcion' => 'required|string',
			'foto'        => 'nullable|image|max:1024',
		]);

		if ($request->hasFile('foto')) {
			$data['foto'] = $request->file('foto')->store('pqrses', 'public');
		}

		Pqrs::create($data);

		// ENVIAR CORREO
		Mail::to('coopsercont@contadero-narino.gov.co')->send(new PqrsCreatedMail($data));

		return back()->with('success', 'PQRS enviada correctamente.');
	}
}
