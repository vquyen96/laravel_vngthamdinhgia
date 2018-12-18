<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vanban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vanban', function (Blueprint $table) {
            $table->increments('id_vb');
            $table->timestamps();
            $table->string('ten_vb');
            $table->string('chu_thich');
            $table->string('anh_vb');
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
        Schema::dropIfExists('vanban');
    }
}
