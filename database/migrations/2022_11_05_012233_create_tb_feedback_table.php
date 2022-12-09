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
        Schema::create('tb_feedback', function (Blueprint $table) {
            $table->increments('PH_id');
            $table->string('PH_fullname');
            $table->string('PH_service');
            $table->string('PH_img')->nullable();
            $table->text('PH_content');
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
        Schema::dropIfExists('tb_feedback');
    }
};
