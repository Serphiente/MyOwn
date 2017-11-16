<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59f23353cd963RelationshipsToListaexternaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listaexternas', function(Blueprint $table) {
            if (!Schema::hasColumn('listaexternas', 'producto_id')) {
                $table->integer('producto_id')->unsigned()->nullable();
                $table->foreign('producto_id', '84779_59f2262295ac8')->references('id')->on('productos')->onDelete('cascade');
                }
                if (!Schema::hasColumn('listaexternas', 'proveedor_id')) {
                $table->integer('proveedor_id')->unsigned()->nullable();
                $table->foreign('proveedor_id', '84779_59f226229b7b7')->references('id')->on('contact_companies')->onDelete('cascade');
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
        Schema::table('listaexternas', function(Blueprint $table) {
            
        });
    }
}
