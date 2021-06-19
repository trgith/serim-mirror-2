<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dependency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependencies', function (Blueprint $table) {
            $table->id();
            $table->string('name_dependency',150);
            $table->string('address',150)->nullable();
            $table->string('exterior_number',5)->nullable();
            $table->string('interior_number',5)->nullable();
            $table->string('telephone', 13)->nullable();
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
        Schema::dropIfExists('dependencies');
    }
}
