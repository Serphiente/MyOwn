<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1509041840ProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productos', function (Blueprint $table) {
            if(Schema::hasColumn('productos', 'principio_activo_id')) {
                $table->dropForeign('84777_59f224f21c415');
                $table->dropIndex('84777_59f224f21c415');
                $table->dropColumn('principio_activo_id');
            }
            
        });
Schema::table('productos', function (Blueprint $table) {
            if(! Schema::hasColumn('productos', 'deleted_at')) {
                $table->softDeletes();
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
        Schema::table('productos', function (Blueprint $table) {
            if(Schema::hasColumn('productos', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });
Schema::table('productos', function (Blueprint $table) {
                        
        });

    }
}
