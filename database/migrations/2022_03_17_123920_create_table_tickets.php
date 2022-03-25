<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->unsignedBigInteger('categoria_id')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('prioridade_id')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('previsao_solucao');
            $table->string('titulo');
            $table->string('descricao')->nullable();
            $table->enum('tipo',['Interno', 'Externo'])->nullable();
            $table->string('status_ticket')->nullable();
            $table->dateTime('data_finalizacao')->nullable();
            $table->dateTime('data_cancelamento')->nullable();
            $table->enum('status',['Ativo', 'Inativo']);
            $table->timestamps();


            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('categoria_id')->references('id')->on('tickets_categorias');
            $table->foreign('prioridade_id')->references('id')->on('tickets_prioridades');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
