<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('movimiento');
            $table->double('subtotal', 10, 2);
            $table->double('descuento', 10, 2);
            $table->double('total', 10, 2);

            $table->integer('cliente_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();

            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

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
        Schema::dropIfExists('ventas');
    }
}
