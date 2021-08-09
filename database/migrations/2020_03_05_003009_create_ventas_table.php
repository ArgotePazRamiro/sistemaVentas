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
            $table->id();
            $table->string('codigo')->nullable();
            $table->string('precio')->nullable();
            $table->string('efectivo')->nullable();
            $table->string('transferencia')->nullable();
            $table->string('tarjeta')->nullable();
            $table->string('deposito')->nullable();
            $table->string('efectivoD')->nullable();
            $table->string('transferenciaD')->nullable();
            $table->string('tarjetaD')->nullable();
            $table->string('depositoD')->nullable();
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
