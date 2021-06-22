<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Annexed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annexed', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('annexed_catalog_id');
            $table->timestamps();
        });

        Schema::table('annexed', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('annexed_catalog_id')->references('id')->on('annexed_catalog');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annexed');
    }
}
