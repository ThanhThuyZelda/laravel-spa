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
        Schema::create('tb_booking', function (Blueprint $table) {
            $table->increments('DL_id');
            $table->string('DL_hoten');
            $table->string('DL_sdt');
            $table->string('DL_email');
            $table->string('DL_diachi');
            $table->dateTime('DL_thoigian');
            $table->string('DL_active')->default('Chưa xác nhận');
            $table->Integer('DV_id')->unsigned();
            $table->foreign('DV_id')->references('DV_id')->on('tb_service')->onDelete('cascade');
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
        Schema::dropIfExists('tb_booking');
    }
};
