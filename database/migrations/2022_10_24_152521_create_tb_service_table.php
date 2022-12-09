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
        Schema::create('tb_service', function (Blueprint $table) {
            $table->increments('DV_id');
            $table->string('DV_name');
            $table->bigInteger('Dv_gia')->unsigned();
            $table->text('DV_mota');
            $table->text('DV_nd');
            $table->Integer('type_id')->unsigned();
            $table->foreign('type_id')->references('type_id')->on('tb_service_type')->onDelete('cascade');
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
        Schema::dropIfExists('tb_service');
    }
};
