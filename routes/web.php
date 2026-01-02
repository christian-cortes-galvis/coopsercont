<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, NewsController, TarifaController, AvisoController, ReporteController};

Route::get('/', [HomeController::class, 'index']);
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

Route::get('/compromiso-ambiental', fn () => view('institucional.compromiso-ambiental'))->name('compromiso.ambiental');

Route::get('/estructura-organica', fn () => view('institucional.estructura-organica'))->name('estructura.organica');

Route::prefix('transparencia')->group(function () {
	Route::get('/', fn () => view('transparencia.index'))->name('transparencia.index');

	Route::get('/instrumentos', fn () => view('transparencia.instrumentos'));
	Route::get('/tramites', fn () => view('transparencia.tramites'));

	Route::get('/transparencia/presupuesto', fn () => view('transparencia.presupuesto'))->name('transparencia.presupuesto');

	Route::get('/transparencia/contratacion', fn () => view('transparencia.contratacion.index'))->name('transparencia.contratacion');
	Route::get('/contratacion/plan-anual', fn () => view('transparencia.contratacion.plan'));
	Route::get('/contratacion/ejecucion', fn () => view('transparencia.contratacion.ejecucion'));

	Route::get('/presupuesto', fn () => view('transparencia.presupuesto'));
	Route::get('/normatividad', fn () => view('transparencia.normatividad'));
});
