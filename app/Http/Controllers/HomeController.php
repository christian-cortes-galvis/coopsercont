<?php

namespace App\Http\Controllers;

use App\Models\{Service, Announcement};

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'services'     => Service::all(),
            'announcements'=> Announcement::where('activo', true)->latest()->limit(5)->get(),
        ]);
    }
}
