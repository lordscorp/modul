<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParametroTipo extends Model
{
    protected $table = 'parametro_tipos';

    protected $fillable = [
        'nome',
        'descricao',
    ];

    public $timestamps = false;

    public function parametros()
    {
        return $this->hasMany(Parametro::class, 'tipo_id');
    }
}
