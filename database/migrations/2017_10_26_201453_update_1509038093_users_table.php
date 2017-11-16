<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1509038093UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if(! Schema::hasColumn('users', 'deleted_at')) {
                $table->softDeletes();
            }
            
        });
Schema::table('users', function (Blueprint $table) {
            
if (!Schema::hasColumn('users', 'rut')) {
                $table->string('rut');
                }
if (!Schema::hasColumn('users', 'banco')) {
                $table->string('banco');
                }
if (!Schema::hasColumn('users', 'tipocuentabanco')) {
                $table->string('tipocuentabanco');
                }
if (!Schema::hasColumn('users', 'cuentabancaria')) {
                $table->string('cuentabancaria');
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('rut');
            $table->dropColumn('banco');
            $table->dropColumn('tipocuentabanco');
            $table->dropColumn('cuentabancaria');
            
        });
Schema::table('users', function (Blueprint $table) {
            if(Schema::hasColumn('users', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
