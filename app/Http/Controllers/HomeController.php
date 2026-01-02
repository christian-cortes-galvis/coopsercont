<?php

namespace App\Http\Controllers;

use App\Models\{News, Announcement};

class HomeController extends Controller
{
	public function index()
	{
		$noticias = News::where('activo', true)->orderBy('fecha_publicacion', 'desc')->take(3)->get();
		$avisos = Announcement::where('activo', true)->orderBy('created_at', 'desc')->take(2)->get();
		return view('home.index', compact('noticias', 'avisos'));
	}
}
