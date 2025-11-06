<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtor extends Model
{
    protected $table = 'produtores';

    // Campos que podem ser preenchidos via create() ou update()
    protected $fillable = [
        'codProdutores',
        'nome',
        'CPF',
        'dataNascimento',
        'sexo',
        'email',
        'telefone',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'login',
        'senha',
        'produtor_status',
    ];

    // Um produtor pode ter várias propriedades
    public function propriedades()
    {
        return $this->hasMany(Propriedade::class, 'idProdutores', 'codProdutores');
    }
}
