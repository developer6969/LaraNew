<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('nick')->nullable();
            $table->string('tagline')->nullable();
            $table->integer('doctor')->default(0);
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('incharge')->nullable();
            
            $table->string('photo')->nullable();
            $table->longText('about')->nullable();
            $table->string('open')->nullable();
            $table->string('lunch')->nullable();
            $table->string('close')->nullable();
            $table->string('off')->nullable();
            
            $table->string('number')->nullable();
            $table->string('street')->nullable();
            $table->string('area')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('pincode')->nullable();
            $table->string('nearby')->nullable();
            $table->text('map')->nullable();
            $table->string('gps_long')->nullable();
            $table->string('gps_lati')->nullable();

            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('clinics');
    }
}
