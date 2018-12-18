<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tailieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tailieu', function (Blueprint $table) {
            $table->increments('id_tl');
            $table->timestamps();
            $table->string('ten_tl');
            $table->string('chu_thich');
            $table->string('anh_tl');
            $table->string('ten_file');

            $table->integer('id_lv')->unsigned();
            $table->foreign('id_lv')
                ->references('id_lv')
                ->on('linhvuc')
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
        Schema::dropIfExists('tailieu');
    }
}
