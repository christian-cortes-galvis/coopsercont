<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, ServiceController, TarifaController, AvisoController, ReporteController};

Route::get('/', [HomeController::class, 'index']);
Route::get('/servicios', [ServiceController::class, 'index']);
Route::get('/tarifas', [TarifaController::class, 'index']);
Route::get('/avisos', [AvisoController::class, 'index']);
Route::get('/reporte', [ReporteController::class, 'create']);
Route::post('/reporte', [ReporteController::class, 'store']);
