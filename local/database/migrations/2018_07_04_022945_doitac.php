<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Doitac extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doitac', function (Blueprint $table) {
            $table->increments('id_dt');
            $table->timestamps();
            $table->string('ten_dt');
            $table->string('dia_chi');

            $table->integer('id_ldt')->unsigned();
            $table->foreign('id_ldt')
                ->references('id_ldt')
                ->on('loaidoitac')
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
        Schema::dropIfExists('doitac');
    }
}
