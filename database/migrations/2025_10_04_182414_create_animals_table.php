<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Executa a criação da tabela 'animais'.
     */
    public function up(): void
    {
        Schema::create('animais', function (Blueprint $table) {
            // Chave primária
            $table->id('codAnimais');

            // Chaves estrangeiras
            $table->unsignedBigInteger('idRaca')->nullable();
            $table->unsignedBigInteger('idPropriedades')->nullable();

            // Demais campos
            $table->string('numeracaoBrinco', 50)->nullable();
            $table->string('nome', 100)->nullable();
            $table->enum('sexo', ['M', 'F'])->nullable();
            $table->date('dataNascimento')->nullable();
            $table->integer('idade')->nullable();
            $table->string('pelagem', 100)->nullable();
            $table->string('origem', 100)->nullable();
            $table->string('situacaoReprodutiva', 100)->nullable();
            $table->string('nomePai', 100)->nullable();
            $table->string('nomeMae', 100)->nullable();
            $table->decimal('valorMercadoAtual', 10, 2)->nullable();
            $table->string('situacaoComercial', 100)->nullable();
            $table->boolean('animal_status')->default(true);

            // Timestamps padrão do Laravel
            $table->timestamps();

            // Definição das foreign keys
            $table->foreign('idRaca')
                  ->references('codRaca')
                  ->on('racas')
                  ->onDelete('set null')
                  ->onUpdate('cascade');

            $table->foreign('idPropriedades')
                  ->references('codPropriedades')
                  ->on('propriedades')
                  ->onDelete('set null')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverte a criação da tabela.
     */
    public function down(): void
    {
        Schema::dropIfExists('animais');
    }
};

