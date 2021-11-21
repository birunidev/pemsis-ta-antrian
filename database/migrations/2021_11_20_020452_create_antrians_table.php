<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntriansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antrians', function (Blueprint $table) {
            $table->string('id_antrian',5)->primary();
            $table->integer('total_antrian');
            $table->string('nomer_teller',5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antrians');
    }
}
// create database Teller_app;

/*
create table antrian (
id_antrian varchar(5) primary key,
total_antrian integer,
nomer_teller varchar(1),
);

create table antrian_aktif (
id_antrian varchar(5) foreign key,
antrian_aktif varchar(10),
status_antrian varchar(20),
);

create view antrian_view as
select
a.id_antrian ,
a.total_antrian ,
a.nomer_teller ,
b.antrian_aktif,
b.status_antrian
from antrian as a
inner join antrian_aktif as b on a.id_antrian = b.id_antrian

*/
