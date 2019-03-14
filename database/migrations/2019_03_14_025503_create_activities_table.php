<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('action_type')->default(0);
            $table->timestamps();
        });

        Schema::table('activities', function (Blueprint $table) {
            $table->unsignedBigInteger('poll_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('poll_id')->references('id')->on('polls');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
