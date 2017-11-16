<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1509041697ListaexternasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('listaexternas')) {
            Schema::create('listaexternas', function (Blueprint $table) {
                $table->increments('id');
                $table->string('codigo')->nullable();
                $table->date('vencimiento')->nullable();
                $table->string('regisp')->nullable();
                $table->decimal('preciounidad', 15, 2)->nullable();
                $table->decimal('precio_caja', 15, 2)->nullable();
                $table->string('stock');
                $table->text('observaciones')->nullable();
                
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
        Schema::dropIfExists('listaexternas');
    }
}
