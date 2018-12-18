<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tintuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintuc', function (Blueprint $table) {
            $table->increments('id_tt');
            $table->timestamps();
            $table->string('tieu_de');
            $table->string('anh_tieu_de');
            $table->string('noi_dung');
            
            $table->integer('id_lt')->unsigned();
            $table->foreign('id_lt')
                ->references('id_lt')
                ->on('loaitin')
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
        Schema::dropIfExists('tintuc');
    }
}
