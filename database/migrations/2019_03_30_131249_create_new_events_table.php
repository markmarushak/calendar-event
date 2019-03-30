<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->string('start_year');
            $table->string('start_month');
            $table->string('start_day');
            $table->string('end_year');
            $table->string('end_month');
            $table->string('end_day');
            $table->string('start_hour');
            $table->string('start_minute');
            $table->string('end_hour');
            $table->string('end_minute');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_events');
    }
}
