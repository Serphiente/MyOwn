<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1509041039PresentacionproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('presentacionproductos')) {
            Schema::create('presentacionproductos', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nombre')->nullable();
                $table->string('nombrecorto')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
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
        Schema::dropIfExists('presentacionproductos');
    }
}
