<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnnexedCatalogArea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annexed_catalog_areas', function (Blueprint $table) {

            $table->integer('annexed_catalog_id')->unsigned();
            $table->integer('area_id')->unsigned();

            $table->foreign('annexed_catalog_id')->references('id')->on('annexed_catalogs')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annexed_catalog_areas');
    }
}
