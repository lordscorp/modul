<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    protected $fillable = ['nome', 'descricao', 'tipo_id'];

    public function tipo()
    {
        return $this->belongsTo(ParametroTipo::class, 'tipo_id');
    }
}
