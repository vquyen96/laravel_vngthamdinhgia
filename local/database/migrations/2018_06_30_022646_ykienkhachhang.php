<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ykienkhachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ykienkhachhang', function (Blueprint $table) {
            $table->increments('id_yk');
            $table->timestamps();
            $table->string('ho_ten');
            $table->string('chuc_vu');
            $table->string('noi_dung');
            $table->string('anh_dd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ykienkhachhang');
    }
}
