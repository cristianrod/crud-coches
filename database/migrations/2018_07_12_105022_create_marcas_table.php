<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('caracteristica');
            $table->timestamps();
        });

        DB::table('marcas')->insert([
            'nombre' => 'Audi',
            'caracteristica' => 'Marca Alemana fundada en 1909',
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'Kia',
            'caracteristica' => 'Marca Corena fundada en 1944',
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'Mazda',
            'caracteristica' => 'Marca Japonesa fundada en 1920',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcas');
    }
}
