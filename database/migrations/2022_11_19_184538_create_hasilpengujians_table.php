<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasilpengujians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('mahasiswas')->onDelete('cascade');
            $table->time('waktu_uji');
            $table->string('verbal');
            $table->string('abstrak');
            $table->string('bahasa');
            $table->string('skolastik');
            $table->string('spasial');
            $table->string('numerik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasilpengujians');
    }
};
