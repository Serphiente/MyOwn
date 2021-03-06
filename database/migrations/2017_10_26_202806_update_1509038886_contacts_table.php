<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1509038886ContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            if(! Schema::hasColumn('contacts', 'deleted_at')) {
                $table->softDeletes();
            }
            
        });
Schema::table('contacts', function (Blueprint $table) {
            
if (!Schema::hasColumn('contacts', 'observaciones')) {
                $table->text('observaciones');
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
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('observaciones');
            
        });
Schema::table('contacts', function (Blueprint $table) {
            if(Schema::hasColumn('contacts', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
