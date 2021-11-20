<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntrianAktifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antrian_aktifs', function (Blueprint $table) {
            $table->string('id_antrian',5);
            $table->foreign('id_antrian',5)->references('id_antrian')->on('antrians')->onUpdate('cascade')->onDelete('cascade');
            $table->string('antrian_aktif',10);
            $table->string('status_antrian',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antrian_aktifs');
    }
}
