<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Files extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('annexed_id');
            $table->string('url');
            $table->smallInteger('type_file');
            $table->timestamps();
        });

        Schema::table('files', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('annexed_id')->references('id')->on('annexed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
