<?php
namespace App\Http\Controllers;

use App\Models\ParametroTipo;

class ParametroTipoController extends Controller
{
    public function index()
    {
        return ParametroTipo::all();
    }
}
