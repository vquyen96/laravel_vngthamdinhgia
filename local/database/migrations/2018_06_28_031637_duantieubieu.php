<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Duantieubieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duantieubieu', function (Blueprint $table) {
            $table->increments('id_da');
            $table->string('ten_da');
            $table->string('anh_da');
            $table->timestamps();

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
        Schema::dropIfExists('duantieubieu');
    }
}
