<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActive extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accounts', function (Blueprint $table) {
            
            $table->boolean('confirmed')->default(true);
            $table->integer('created_by')->default(1);
             $table->string('stupid')->nullable();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accounts', function (Blueprint $table) {
            //
              $table->dropColumn('confirmed');
            $table->dropColumn('created_by');
            $table->dropColumn('stupid');
        });
    }
}
