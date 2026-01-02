<?php

namespace App\Http\Controllers;

use App\Models\Announcement;

class AvisoController extends Controller
{
	public function index()
	{
		$avisos = Announcement::where('activo', true)->orderBy('tipo')->orderBy('created_at', 'desc')->get()->groupBy('tipo');
		return view('avisos.index', compact('avisos'));
	}
}
