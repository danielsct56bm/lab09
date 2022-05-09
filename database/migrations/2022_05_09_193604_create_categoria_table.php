<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('carro_compras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('venta', function (Blueprint $table){
           $table->id();
           $table->timestamps();
           $table->enum('estado',['0','1','2']);
        });

        Schema::create('articulo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('descripcion');
            $table->integer('estado');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('carro_compras_id');
            $table->unsignedBigInteger('venta_id');
            $table->foreign('categoria_id')->references('id')->on('categoria');
            $table->foreign('carro_compras_id')->references('id')->on('carro_compras');
            $table->foreign('venta_id')->references('id')->on('venta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria');
    }
}

