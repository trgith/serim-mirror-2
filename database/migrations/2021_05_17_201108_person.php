<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Person extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('full_name', 100)->nullable();
            $table->smallInteger('num_control')->nullable();
            $table->string('email_institutional', 100)->nullable();
            $table->string('email_personal')->nullable();
            $table->string('telephone',13)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('colony',100)->nullable();
            $table->string('exterior_number',5)->nullable();
            $table->string('interior_number',5)->nullable();
            $table->string('cp',5)->nullable();
            $table->mediumText('references')->nullable();
            $table->string('image',400)->nullable();
            $table->smallInteger('status')->nullable();
            $table->timestamps();
        });

        //Llave Foranea
        Schema::table('persons', function (Blueprint $table) {
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
        Schema::dropIfExists('persons');
    }
}
