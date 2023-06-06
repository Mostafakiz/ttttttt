<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family', function (Blueprint $table) {
            $table->id();
            $table->string("fatheName")->unique();
            $table->string("nationalNumber")->unique();
            $table->string("phoneNuber");
            $table->string("state");
            $table->unsignedBigInteger("placeId")->nullable();
            $table->unsignedBigInteger("userId");
            $table->foreign('placeId')->references('id')->on('places');
            $table->foreign('userId')->references('id')->on('users1');  
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
        Schema::dropIfExists('family');
    }
}
