<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Parametro;
use Illuminate\Http\JsonResponse;

class ParametroController extends Controller
{
    public function index(): JsonResponse
    {
        $parametros = Parametro::with('tipo')->get();

        return response()->json($parametros);
    }

    public function show(int $id): JsonResponse
    {
        $parametro = Parametro::with('tipo')->findOrFail($id);

        return response()->json($parametro);
    }
}
