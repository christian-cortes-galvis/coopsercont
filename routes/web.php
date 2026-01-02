<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, ServiceController, NewsController, TarifaController, AvisoController, ReporteController};

Route::get('/', [HomeController::class, 'index']);
Route::get('/servicios', [ServiceController::class, 'index']);
Route::get('/servicios/acueducto', fn () => view('servicios.acueducto'))->name('servicios.acueducto');
Route::get('/servicios/alcantarillado', fn () => view('servicios.alcantarillado'))->name('servicios.alcantarillado');
Route::get('/servicios/aseo', fn () => view('servicios.aseo'))->name('servicios.aseo');
Route::get('/tarifas', [TarifaController::class, 'index']);
Route::get('/avisos', [AvisoController::class, 'index']);
Route::get('/reporte', [ReporteController::class, 'create']);
Route::post('/reporte', [ReporteController::class, 'store']);
Route::get('/contacto', fn () => view('contacto.index'))->name('contacto');

Route::get('/noticias', [NewsController::class, 'index'])->name('noticias.index');
Route::get('/noticias/{news}', [NewsController::class, 'show'])->name('noticias.show');

