<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tuvankhachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuvankhachhang', function (Blueprint $table) {
            $table->increments('id_tv');
            $table->timestamps();
            $table->string('ho_ten');
            $table->string('dien_thoai');

            $table->integer('id_dv')->unsigned();
            $table->foreign('id_dv')
                ->references('id_dv')
                ->on('dichvu')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tuvankhachhang');
    }
}
