<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AvionesMigrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aviones', function(Blueprint $table){
            $table->increments('serie');
            $table->string('modelo');
            $table->float('longitud');
            $table->integer('capacidad');
            $table->integer('velocidad');
            $table->integer('alcance');
            // Añadimos la clave foránea con Fabricante. fabricante_id
            $table->integer('fabricante_id')->unsigned();
            // Indicamos cual es la clave foránea de esta tabla:
            $table->foreign('fabricante_id')->references('id')->on('fabricantes');
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
        //
    }
}
