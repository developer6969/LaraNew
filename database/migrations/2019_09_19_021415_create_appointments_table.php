<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->time('time');
            $table->string('purpose');
            $table->integer('queue');
            $table->unsignedBigInteger('schedule_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('member_id');
            $table->string('user_id');
            $table->timestamps();

            // $table->foreign('schedule_id')->references('id')->on('schedules');
            // $table->foreign('status_id')->references('id')->on('statuses');
            // $table->foreign('member_id')->references('id')->on('members');
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
