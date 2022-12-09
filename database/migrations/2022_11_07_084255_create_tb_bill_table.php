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
        Schema::create('tb_bill', function (Blueprint $table) {
            $table->increments('HD_id');
            $table->bigInteger('HD_tratruoc')->unsigned()->default(0);
            $table->string('HD_active')->default('Chưa thanh toán');
            $table->Integer('DL_id')->unsigned();
            $table->foreign('DL_id')->references('DL_id')->on('tb_booking')->onDelete('cascade');
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
        Schema::dropIfExists('tb_bill');
    }
};
