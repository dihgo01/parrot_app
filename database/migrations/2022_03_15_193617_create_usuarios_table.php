<?php

use App\Models\Usuarios;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email')->unique();
            $table->string('celular');
            $table->string('password');
            $table->unsignedBigInteger('avatar_id')->nullable();
            $table->enum('status', ['Ativo', 'Inativo']);
            $table->timestamps();

            $table->foreign('avatar_id')->references('id')->on('arquivos');
            $table->unique('avatar_id');
        });

        Usuarios::create([ 'nome' => 'admin', 'sobrenome' => 'sobrenome', 'email' => 'admin@themesbrand.com', 'celular' => '(19) 992345-4532', 'password' => bcrypt('123456'), 'created_at' => now(),]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
