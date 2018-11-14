<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaVendedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_vendedor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factura_id')->unsigned();
            $table->integer('vendedor_id')->unsigned();
            $table->string('unidadven');
            $table->timestamps();
        

            $table->foreign('factura_id')->references('id')->on('facturas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('vendedor_id')->references('id')->on('vendedores')
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
        Schema::dropIfExists('facturas_vendedores');
    }
}
