<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
//            $table->string('email')->unique();
            $table->string('password');
            $table->integer('cargo_id')->unsigned()->nullable();
            $table->foreign('cargo_id')->references('id')->on('cargos');
            $table->integer('personal_id')->unsigned()->nullable();
            $table->foreign('personal_id')->references('id')->on('personales');
            $table->integer('perfil_id')->unsigned()->nullable();
            $table->foreign('perfil_id')->references('id')->on('perfiles');
            $table->boolean('estado',true)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
