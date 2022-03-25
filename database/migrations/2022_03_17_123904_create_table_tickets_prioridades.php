<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTicketsPrioridades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets_prioridades', function (Blueprint $table) {
            $table->id();
            $table->string('nome_prioridade');
            $table->string('cor_prioridade')->nullable();
            $table->string('ordenacao');
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
        Schema::dropIfExists('tickets_prioridades');
    }
}
