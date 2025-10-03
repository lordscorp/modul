<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ParametroTipo;
use Illuminate\Http\JsonResponse;

class ParametroTipoController extends Controller
{
    public function index(): JsonResponse
    {
        $tipos = ParametroTipo::all();
        return response()->json($tipos);
    }
}
