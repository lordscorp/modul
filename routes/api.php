<?php

use App\Http\Controllers\Api\ParametroController;
use App\Http\Controllers\Api\ParametroTipoController;
use Illuminate\Support\Facades\Route;

Route::get('/parametro-tipos', [ParametroTipoController::class, 'index']);
Route::post('/parametros', [ParametroController::class, 'store']);
