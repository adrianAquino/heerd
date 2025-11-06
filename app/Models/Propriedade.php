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
     * Uma propriedade pertence a um produtor, logo utiliza-se o belongsTo
     */
    public function produtor()
    {
        return $this->belongsTo(Produtor::class, 'idProdutores', 'codProdutores');
    }

    //uma propriedade pode ter varios lotes
    public function lotesDaPropriedadeComAnimal(){
        return $this->hasMany(LoteDaPropriedadeComAnimal::class, 'idPropriedades', 'codPropriedades');
    }

    //uma propriedade pode ter varios animais, logo o id da proprieade está em vários animais, por isso o hasMany
    public function animais(){
        return $this->hasMany(Animal::class, 'idPropriedades', 'codPropriedades');
    }
}
