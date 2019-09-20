<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDefaultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_defaults', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->unsignedBigInteger('clinic_id');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('day_id');
            $table->unsignedBigInteger('session_id');
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('clinic_id')->references('id')->on('clinics')->onDelete('cascade');
            // $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            // $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
            // $table->foreign('day_id')->references('id')->on('days')->onDelete('cascade');
            // $table->foreign('session_id')->references('id')->on('sessions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_defaults');
    }
}
