<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCochesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('caracteristica');
            $table->integer('marca_id');
            $table->timestamps();
        });


        DB::table('coches')->insert([
            'nombre' => 'A4',
            'caracteristica' => 'Audi A4 2017 Negro de 4 Puertas',
            'marca_id' => 1
        ]);
        DB::table('coches')->insert([
            'nombre' => 'Niro',
            'caracteristica' => 'Kia Niro 2018 Azul de 4 Puertas',
            'marca_id' => 2
        ]);
        DB::table('coches')->insert([
            'nombre' => 'Mazda6',
            'caracteristica' => 'Mazda6 2018 Rojo de 4 Puertas',
            'marca_id' => 3
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coches');
    }
}
