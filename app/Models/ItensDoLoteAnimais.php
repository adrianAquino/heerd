<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItensDoLoteAnimais extends Model
{
     protected $table = 'itensDoLoteAnimais';

    protected $fillable = [
        'coditensDoLotePropriedadeAnimais',
        'idAnimais',
        'idLotePropriedadeAnimais',
        'dataEntrada',
        'dataSaida',
        'motivoSaida',
        'observacoes'
    ];

    public function animais(){
        return $this->belongsTo(Animal::class, 'idAnimais', 'codAnimais');
    }

    public function loteDaPropriedadeComAnimal(){
        return $this->belongsTo(LoteDaPropriedadeComAnimal::class, 'idLotePropriedadeAnimais', 'codLoteDaPropriedadeAnimais');
    }

}
