<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnnexedProceedings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annexed_proceedings', function (Blueprint $table) {
            $table->id();
            $table->integer('annexed_id')->unsigned();
            $table->unsignedBigInteger('proceeding_id');
            $table->timestamps();
        });

        Schema::table('annexed_proceedings', function (Blueprint $table) {
            $table->foreign('annexed_id')->references('id')->on('annexeds');
            $table->foreign('proceeding_id')->references('id')->on('proceedings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annexed_proceedings');
    }
}
