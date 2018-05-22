<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_examenes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('tipo')->nullable();
            $table->decimal('valor',10,2);
            $table->decimal('dscto',10,2);
            $table->boolean('estado');
            $table->boolean('individual')->nullable();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lista_examenes');
    }
}
