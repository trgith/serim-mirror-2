<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnnexedCatalogDependencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annexed_catalog_dependencies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('annexed_catalog_id')->unsigned();
            $table->integer('area_id')->unsigned();
            $table->bigInteger('dependency_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::table('annexed_catalog_dependencies', function (Blueprint $table) {
            $table->foreign('annexed_catalog_id')->references('id')->on('annexed_catalogs');
            $table->foreign('dependency_id')->references('id')->on('dependencies');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('area_id')->references('id')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annexed_catalog_dependencies');
    }
}
