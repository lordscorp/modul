<?php

use App\Http\Controllers\ParametroController;
use App\Http\Controllers\ParametroTipoController;

Route::get('/parametro-tipos', [ParametroTipoController::class, 'index']);
Route::post('/parametros', [ParametroController::class, 'store']);
