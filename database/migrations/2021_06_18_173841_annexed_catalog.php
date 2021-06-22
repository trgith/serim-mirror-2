<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnnexedCatalog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annexed_catalog', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('area_id');
            $table->string('name', 150);
            $table->string('number',100);
            $table->smallInteger('status');
            $table->timestamps();
        });

        Schema::table('annexed_catalog', function(Blueprint $table) {
            $table->foreign('area_id')->references('id')->on('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annexed_catalog');
    }
}
