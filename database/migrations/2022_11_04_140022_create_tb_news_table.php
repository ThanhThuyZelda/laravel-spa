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
        Schema::create('tb_news', function (Blueprint $table) {
            $table->increments('TT_id');
            $table->string('TT_img');
            $table->text('TT_name');
            $table->text('TT_des');
            $table->text('TT_content');
            $table->Integer('NV_id')->unsigned();
            $table->foreign('NV_id')->references('NV_id')->on('tb_staff')->onDelete('cascade');
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
        Schema::dropIfExists('tb_news');
    }
};
