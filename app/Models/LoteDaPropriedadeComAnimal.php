<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoteDaPropriedadeComAnimal extends Model
{
    protected $table  = 'loteDaPropriedadeComAnimais';


    protected $fillable = [
        'codLoteDaPropriedadeAnimais',
        'idPropriedade',
        'nome',
        'dataCriacao',
        'finalidadeLote',
        'quantidadeAnimais',
        'localizacaoLote',
        'racaPredominante',
        'loteDaPropriedadeAnimais_status'
    ];

    public function propriedades(){
        return $this->belongsTo( Propriedade::class, 'idPropriedade', 'codPropriedades');
    }

    public function itensdolote() {
        return $this->hasMany(ItensDoLoteAnimais::class, 'idLotePropriedadeAnimais', 'codLotePropriedadeAnimais');
    }
}