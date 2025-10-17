<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propriedade extends Model
{
      protected $table = 'propriedades'; // nome da tabela

      protected $fillable = [
        'codPropriedades',
        'idProdutores',
        'nome',
        'cidade',
        'estado',
        'estrada_rua',
        'areaTotal',
        'latitude',
        'longitude',
        'quantidadeAnimais',
        'responsavelTecnico',
        'propriedade_status',
    ];

     /**
     * Define o relacionamento com o produtor (proprietário da fazenda).
     * Uma propriedade pertence a um produtor.
     */
    public function produtor()
    {
        return $this->belongsTo(Produtor::class, 'idProdutores', 'id');
    }
}
