<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->foreign("id_cliente")
                ->references("id")
                ->on("clientes")
                ->onDelete("set null");
            $table->string("codigo");
            $table->date("fechaLimite");
            $table->double("aCuenta");
            $table->double("saldo");
            $table->double("couta1")->nullable();
            $table->date("fecha1")->nullable();

            $table->double("couta2")->nullable();
            $table->date("fecha2")->nullable();
            $table->double("couta3")->nullable();
            $table->date("fecha3")->nullable();
            $table->double("couta4")->nullable();
            $table->date("fecha4")->nullable();
            $table->double("couta5")->nullable();
            $table->date("fecha5")->nullable();
            $table->double("couta6")->nullable();
            $table->date("fecha6")->nullable();

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
        Schema::dropIfExists('creditos');
    }
}
