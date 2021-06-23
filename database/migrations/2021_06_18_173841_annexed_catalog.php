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
        Schema::create('annexed_catalogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('number',100);
            $table->smallInteger('status');
            $table->timestamps();
        });

        Schema::table('annexed_catalogs', function(Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annexed_catalogs');
    }
}
