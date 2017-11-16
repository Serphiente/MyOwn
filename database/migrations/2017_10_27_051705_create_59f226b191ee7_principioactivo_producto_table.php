<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create59f226b191ee7PrincipioactivoProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('principioactivo_producto')) {
            Schema::create('principioactivo_producto', function (Blueprint $table) {
                $table->integer('principioactivo_id')->unsigned()->nullable();
                $table->foreign('principioactivo_id', 'fk_p_84776_84777_producto_59f226b191fc5')->references('id')->on('principioactivos')->onDelete('cascade');
                $table->integer('producto_id')->unsigned()->nullable();
                $table->foreign('producto_id', 'fk_p_84777_84776_principi_59f226b192048')->references('id')->on('productos')->onDelete('cascade');
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('principioactivo_producto');
    }
}
