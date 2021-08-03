<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatetipopagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipopago', function (Blueprint $table) {
            $table->id();
            $table->boolean("efectivo")->nullable();
            $table->string("efectivo1")->nullable();
            $table->boolean("tarjeta")->nullable();
            $table->string("tarjeta1")->nullable();
            $table->boolean("transferencia")->nullable();
            $table->string("transferencia1")->nullable();
            $table->boolean("deposito")->nullable();
            $table->string("deposito1")->nullable();
            
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
        Schema::dropIfExists('tipopago');
    }
}
