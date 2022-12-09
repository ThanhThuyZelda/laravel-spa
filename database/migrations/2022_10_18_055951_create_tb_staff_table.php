<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_staff', function (Blueprint $table) {
            $table->increments('NV_id');
            $table->string('avatar');
            $table->string('fullname');
            $table->string('email');
            $table->string('password');
            $table->boolean('gender');
            $table->string('phone');
            $table->Integer('room_id')->unsigned();
            $table->Integer('CV_id')->unsigned();
            $table->foreign('room_id')->references('room_id')->on('tb_room')->onDelete('cascade');
            $table->foreign('CV_id')->references('CV_id')->on('tb_position')->onDelete('cascade');
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
        Schema::dropIfExists('tb_staff');
    }
};
