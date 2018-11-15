<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_producto', function (Blueprint $table) {
            $table->increments('id');
           
            $table->unsignedInteger('factura_id')->nullable;
            $table->unsignedInteger('producto_id')->nullable;
            $table->timestamps();


            $table->foreign('producto_id')->references('id')->on('productos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('factura_id')->references('id')->on('facturas')
            ->onDelete('cascade')
            ->onUpdate('cascade');


           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_factura');
    }
}
