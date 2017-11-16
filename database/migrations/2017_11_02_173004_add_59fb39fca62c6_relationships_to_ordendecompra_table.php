<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59fb39fca62c6RelationshipsToOrdendecompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ordendecompras', function(Blueprint $table) {
            if (!Schema::hasColumn('ordendecompras', 'proveedor_id')) {
                $table->integer('proveedor_id')->unsigned()->nullable();
                $table->foreign('proveedor_id', '86522_59fb39d31b702')->references('id')->on('contact_companies')->onDelete('cascade');
                }
                if (!Schema::hasColumn('ordendecompras', 'contacto_id')) {
                $table->integer('contacto_id')->unsigned()->nullable();
                $table->foreign('contacto_id', '86522_59fb39d323863')->references('id')->on('contacts')->onDelete('cascade');
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
        Schema::table('ordendecompras', function(Blueprint $table) {
            
        });
    }
}
