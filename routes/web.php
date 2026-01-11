<?php

use Illuminate\Support\Facades\{Route, Artisan};
use App\Http\Controllers\{HomeController, NewsController, TarifaController, AvisoController, SearchController, ReporteController, PqrsController};

Route::get('/', [HomeController::class, 'index']);
Route::get('/servicios/acueducto', fn () => view('servicios.acueducto'))->name('servicios.acueducto');
Route::get('/servicios/alcantarillado', fn () => view('servicios.alcantarillado'))->name('servicios.alcantarillado');
Route::get('/servicios/aseo', fn () => view('servicios.aseo'))->name('servicios.aseo');
Route::get('/tarifas', [TarifaController::class, 'index']);
Route::get('/avisos', [AvisoController::class, 'index']);
Route::get('/reporte', fn () => view('reportes.index'))->name('reporte.index');
Route::get('/pqrs', fn () => view('pqrs.index'))->name('pqrs.index');
Route::post('/crearPQRS', [PqrsController::class, 'create'])->name('crearPQRS');
Route::post('/crearReporte', [ReporteController::class, 'create'])->name('crearReporte');
Route::get('/contacto', fn () => view('contacto.index'))->name('contacto');

Route::get('/noticias', [NewsController::class, 'index'])->name('noticias.index');
Route::get('/noticias/{news}', [NewsController::class, 'show'])->name('noticias.show');

Route::get('/compromiso-ambiental', fn () => view('institucional.compromiso-ambiental'))->name('compromiso.ambiental');

Route::get('/estructura-organizacional', fn () => view('institucional.estructura-organizacional'))->name('estructura.organizacional');

Route::get('/buscar', [SearchController::class, 'index'])->name('buscar');

Route::prefix('transparencia')->group(function () {
	Route::get('/', fn () => view('transparencia.index'))->name('transparencia.index');
	Route::get('/tramites', fn () => view('transparencia.tramites'));
	Route::get('/normatividad', fn () => view('transparencia.normatividad'));
});

Route::get('/clearCache', function () {
	Artisan::call('optimize:clear');
	Artisan::call('config:clear');
	Artisan::call('cache:clear');
	Artisan::call('route:clear');
	Artisan::call('view:clear');
	Artisan::call('package:discover');
	return redirect('/');
});

Route::get('/createLink', function () {
	Artisan::call('storage:link');

	$target = storage_path('app/public');
	$link   = base_path('../public_html/storage');

	if (!file_exists($link)) {
		symlink($target, $link);
		return 'Symlink creado correctamente';
	}

	return 'El symlink ya existe';
});