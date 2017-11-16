<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59fb35bac1590RelationshipsToItemocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('itemocs', function(Blueprint $table) {
            if (!Schema::hasColumn('itemocs', 'item_id')) {
                $table->integer('item_id')->unsigned()->nullable();
                $table->foreign('item_id', '86517_59fb35944f27d')->references('id')->on('listaexternas')->onDelete('cascade');
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
        Schema::table('itemocs', function(Blueprint $table) {
            
        });
    }
}
