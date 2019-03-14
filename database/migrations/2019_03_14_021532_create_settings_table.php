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
            $table->bigIncrements('id');
            $table->tinyInteger('type')->default(0);
            $table->string('value')->nullable();
            $table->timestamps();
        });

       Schema::table('settings', function (Blueprint $table) {
            $table->unsignedBigInteger('poll_id');

            $table->foreign('poll_id')->references('id')->on('polls');
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
