<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DependencyAnnexed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependency_annexed', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dependency_id');
            $table->integer('annexed_id')->unsigned();;
            $table->smallInteger('status');
            $table->timestamps();
        });

        Schema::table('dependency_annexed', function (Blueprint $table) {
            $table->foreign('dependency_id')->references('id')->on('dependencies');
            $table->foreign('annexed_id')->references('id')->on('annexeds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependency_annexed');
    }
}
