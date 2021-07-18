<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipodepagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipodepagos', function (Blueprint $table) {
            $table->increments('id');
            $table->double('efectivo', 10, 2);
            $table->double('transferencia', 10, 2);
            $table->double('deposito', 10, 2);
            $table->double('atc', 10, 2);
            $table->double('credito', 10, 2);
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
        Schema::dropIfExists('tipodepagos');
    }
}
