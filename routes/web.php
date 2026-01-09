<?php

use Illuminate\Support\Facades\{Route, Artisan};
use App\Http\Controllers\{HomeController, NewsController, TarifaController, AvisoController, SearchController, ReporteController};

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

Route::get('/buscar', [SearchController::class, 'index'])->name('buscar');

Route::prefix('transparencia')->group(function () {
	Route::get('/', fn () => view('transparencia.index'))->name('transparencia.index');

	Route::get('/tramites', fn () => view('transparencia.tramites'));
	Route::get('/normatividad', fn () => view('transparencia.normatividad'));
	Route::get('/presupuesto', fn () => view('transparencia.presupuesto'))->name('transparencia.presupuesto');

	Route::get('/contratacion', fn () => view('transparencia.contratacion.index'));
	Route::get('/contratacion/plan-anual', fn () => view('transparencia.contratacion.plan'));
	Route::get('/contratacion/ejecucion', fn () => view('transparencia.contratacion.ejecucion'));
});

Route::get('/clearCache', function () {
	Artisan::call('optimize:clear');
	Artisan::call('config:clear');
	Artisan::call('config:cache');
	Artisan::call('cache:clear');
	Artisan::call('route:clear');
	Artisan::call('view:clear');
	Artisan::call('package:discover');
	Artisan::call('config:cache');
	Artisan::call('view:cache');
	return redirect('/');
});

Route::get('/createLink', function () {
	Artisan::call('storage:link');
	return redirect('/');
});