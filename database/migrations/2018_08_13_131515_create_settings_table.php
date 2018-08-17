<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->boolean('qualified')->default(false);
            $table->boolean('contribute')->default(false);
            $table->integer('level');
            $table->integer('interface');
            $table->string('qualification'); //description to do:
            $table->text('about_me'); //description to do:
            $table->timestamps();
            $table->index(['user_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
