<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Raca extends Model
{
    
    
    protected $table = 'racas';

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'codRaca',
        'nome',
        'tipoRaca',
        'descricao',
        'origemRaca',
        'raca_status'
    ];

    public function animais()
    {
        return $this->hasMany(Animal::class, 'idRaca', 'codRaca');
    }
}
