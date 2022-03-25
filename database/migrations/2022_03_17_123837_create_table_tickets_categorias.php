<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTicketsCategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets_categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome_categoria');
            $table->unsignedBigInteger('id_pai')->nullable();
            $table->string('cor_categoria')->nullable();
            $table->dateTime('data_limite_atendimento');
            $table->enum('status',['Ativo', 'Inativo']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets_categorias');
    }
}
