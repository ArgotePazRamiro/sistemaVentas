<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosantiguosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productosantiguos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("categoria");
            $table->string("codigo");
            $table->string("marca");
            $table->decimal("precio_compra", 9, 2);
            $table->decimal("precio_venta", 9, 2);
            $table->integer("stock");
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
        Schema::dropIfExists('productosantiguos');
    }
}
