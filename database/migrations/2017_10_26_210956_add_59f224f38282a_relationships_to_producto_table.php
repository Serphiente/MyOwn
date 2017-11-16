<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59f224f38282aRelationshipsToProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productos', function(Blueprint $table) {
            if (!Schema::hasColumn('productos', 'tipo_producto_id')) {
                $table->integer('tipo_producto_id')->unsigned()->nullable();
                $table->foreign('tipo_producto_id', '84777_59f224f0e485d')->references('id')->on('tipoproductos')->onDelete('cascade');
                }
                if (!Schema::hasColumn('productos', 'presentacion_producto_id')) {
                $table->integer('presentacion_producto_id')->unsigned()->nullable();
                $table->foreign('presentacion_producto_id', '84777_59f224f1124f6')->references('id')->on('presentacionproductos')->onDelete('cascade');
                }
                if (!Schema::hasColumn('productos', 'principio_activo_id')) {
                $table->integer('principio_activo_id')->unsigned()->nullable();
                $table->foreign('principio_activo_id', '84777_59f224f21c415')->references('id')->on('principioactivos')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos', function(Blueprint $table) {
            
        });
    }
}
