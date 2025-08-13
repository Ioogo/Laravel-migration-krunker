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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->date('data_nascimento');
            $table->string('telefone')->nullable();
            $table->string('endereco')->nullable();
            $table->string('curso')->nullable();
            $table->date('data_matricula')->nullable();
            $table->string('status')->default('ativo');
            $table->decimal('nota_media', 5, 2)->nullable();
            $table->text('observacoes')->nullable();
            $table->string('foto_perfil')->nullable();
            $table->string('responsavel')->nullable();
            $table->string('telefone_responsavel')->nullable();
            $table->string('email_responsavel')->nullable();
            $table->string('turma')->nullable();
            $table->string('time')->nullable();
            $table->string('hobby')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
