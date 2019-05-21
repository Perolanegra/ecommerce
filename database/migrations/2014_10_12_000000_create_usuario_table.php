<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->integer('id_nivel')->unique()->default(3);
            $table->string('nome');
            $table->string('CPF')->unique()->nullable();
            $table->string('telefone')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('data_cadastro')->default(now());
            $table->timestamp('data_atualizado')->nullable();
            $table->timestamp('data_deletado')->nullable();
            $table->timestamp('data_email_verificado')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
