<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallepagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallepagos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('tipodepago_id')->unsigned()->nullable();
            $table->integer('venta_id')->unsigned()->nullable();

            $table->foreign('tipodepago_id')->references('id')->on('tipodepagos')->onDelete('set null');
            $table->foreign('venta_id')->references('id')->on('ventas')->onDelete('set null');

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
        Schema::dropIfExists('detallepagos');
    }
}
