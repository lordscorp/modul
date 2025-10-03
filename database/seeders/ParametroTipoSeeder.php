<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ParametroTipo;

class ParametroTipoSeeder extends Seeder
{
    public function run(): void
    {
        $tipos = [
            ['nome' => 'texto', 'descricao' => 'Campo de texto livre'],
            ['nome' => 'char', 'descricao' => 'Texto curto com tamanho fixo'],
            ['nome' => 'inteiro', 'descricao' => 'Número inteiro'],
            ['nome' => 'decimal', 'descricao' => 'Número decimal com casas decimais'],
            ['nome' => 'booleano', 'descricao' => 'Verdadeiro ou falso'],
            ['nome' => 'data', 'descricao' => 'Data no formato YYYY-MM-DD'],
            ['nome' => 'hora', 'descricao' => 'Hora no formato HH:MM:SS'],
            ['nome' => 'data_hora', 'descricao' => 'Data e hora combinadas'],
            ['nome' => 'lista', 'descricao' => 'Seleção entre múltiplos valores pré-definidos'],
            ['nome' => 'arquivo', 'descricao' => 'Upload de arquivo'],
            ['nome' => 'imagem', 'descricao' => 'Upload de imagem'],
            ['nome' => 'email', 'descricao' => 'Endereço de e-mail válido'],
            ['nome' => 'url', 'descricao' => 'Endereço de site ou recurso web'],
        ];

        foreach ($tipos as $tipo) {
            ParametroTipo::create($tipo);
        }
    }
}