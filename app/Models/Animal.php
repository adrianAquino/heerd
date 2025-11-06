<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animais';


    protected $fillable =[
        'codAnimais',
        'idRaca',
        'idPropriedades',
        'numeracaoBrinco',
        'nome',
        'sexo',
        'dataNascimento',
        'idade',
        'pelagem',
        'origem',
        'situacaoReprodutiva',
        'nomePai',
        'nomePai',
        'valorMercadoAtual',
        'situacaoComercial',
        'animal_status'
    ];

    public function raca(){
        return $this->belongsTo( Raca::class, 'idRaca', 'codRaca');
    }

    public function  propriedade(){
        return $this->belongsTo(Propriedade::class, 'idPropriedades', 'codPropriedade');
    }

    public function itensdolote() {
        return $this->hasMany(ItensDoLoteAnimais::class, 'idAnimais', 'codAnimais');
    }
}
