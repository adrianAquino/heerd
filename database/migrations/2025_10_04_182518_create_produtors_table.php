<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtores', function (Blueprint $table) {
            $table->id();
            $table->integer('codProdutores')->unique(); // Código próprio do produtor
            $table->string('nome', 255);
            $table->string('CPF', 20)->unique();
            $table->date('dataNascimento');
            $table->string('sexo', 20);
            $table->string('email', 255)->unique();
            $table->string('telefone', 20);
            $table->string('logradouro', 255);
            $table->string('numero', 20);
            $table->string('bairro', 255);
            $table->string('cidade', 255);
            $table->string('estado', 45);
            $table->string('cep', 45);
            $table->string('login', 100)->unique();
            $table->string('senha', 255); // aumentado para caber hash bcrypt
            $table->enum('produtor_status', ['Ativo', 'Inativo'])->default('Ativo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtores');
    }
};
