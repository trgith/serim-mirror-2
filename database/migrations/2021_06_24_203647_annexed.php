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
        Schema::create('annexeds', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('parent_id');
            $table->integer('annexed_catalog_dependencies_id')->unsigned();
            $table->string('content', 250);
            $table->integer('annexed_catalog_id')->unsigned();
            $table->smallInteger('status')->nullable()->default(1);
            $table->timestamps();
        });

        Schema::table('annexeds', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('annexed_catalog_dependencies_id')->references('id')->on('annexed_catalog_dependencies');
            $table->foreign('annexed_catalog_id')->references('id')->on('annexed_catalogs');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annexeds');
    }
}
