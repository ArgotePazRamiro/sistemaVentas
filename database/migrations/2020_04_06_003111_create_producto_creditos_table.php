<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_creditos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_creditos");
            $table->foreign("id_creditos")
                ->references("id")
                ->on("creditos")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->string("nombre");
            $table->string("categoria");
            $table->string("precio_comision");
            $table->string("marca");
            $table->integer("total");
            $table->decimal("precio", 9, 2);
            $table->decimal("cantidad", 9, 2);
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
        Schema::dropIfExists('productos_vendidos');
    }
}
