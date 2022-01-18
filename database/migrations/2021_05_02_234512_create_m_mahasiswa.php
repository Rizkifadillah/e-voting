<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('nik',40);
            $table->string('nama',115);
            $table->string('no_telpon',25);
            $table->text('alamat');
            $table->text('photo');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');


            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_mahasiswa', function (Blueprint $table) {
            //
        });
    }
}
