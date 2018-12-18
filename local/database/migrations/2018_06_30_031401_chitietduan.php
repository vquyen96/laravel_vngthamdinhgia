<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chitietduan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietduan', function (Blueprint $table) {
            $table->increments('id_ctda');
            $table->timestamps();
            $table->string('phap_ly');
            $table->string('dia_diem');
            $table->string('thoi_gian');
            $table->string('dien_tich');
            $table->string('muc_dich');
            $table->string('anh_chi_tiet');

            $table->integer('id_da')->unsigned();
            $table->foreign('id_da')
                ->references('id_da')
                ->on('duantieubieu')
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
        Schema::dropIfExists('chitietduan');
    }
}
