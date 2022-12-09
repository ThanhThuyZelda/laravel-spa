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
        Schema::create('tb_advise', function (Blueprint $table) {
            $table->increments('TV_id');
            $table->string('TV_hoten');
            $table->string('TV_sdt');
            $table->text('TV_ttd');
            $table->string('TV_active')->default('Chưa xác nhận');
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
        Schema::dropIfExists('tb_advise');
    }
};
