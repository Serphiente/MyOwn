<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1510845679ListaexternasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listaexternas', function (Blueprint $table) {
            
if (!Schema::hasColumn('listaexternas', 'margen')) {
                $table->integer('margen')->nullable();
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
        Schema::table('listaexternas', function (Blueprint $table) {
            $table->dropColumn('margen');
            
        });

    }
}
