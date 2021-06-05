<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TypeNotification extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_notification', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notification_id');
            $table->enum('notification', ['NO PLICA', 'VACIO', 'EN PROCESO', 'POR AUTORIZAR', 'AUTORIZADO'])->nullable();
            $table->timestamps();
        });

        Schema::table('type_notification', function (Blueprint $table) {
            $table->foreign('notification_id')->references('id')->on('notifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_notification');
    }
}
