<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('icon');
            $table->string('name');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->longText('detail');
            $table->string('category');
            $table->unsignedBigInteger('doctor_id');
            // $table->foreign('doctor_id')->references('id')->on('doctors');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
