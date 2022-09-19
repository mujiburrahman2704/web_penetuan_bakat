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
        Schema::create('pengujians', function (Blueprint $table) {
            $table->id();
            $table->string('tipe');
            $table->string('soal');
            $table->string('a');
            $table->string('gambara');
            $table->string('b');
            $table->string('gambarb');
            $table->string('c');
            $table->string('gambarc');
            $table->string('d');
            $table->string('gambard');
            $table->string('jawaban');
            $table->string('gambar');
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
        Schema::dropIfExists('pengujians');
    }
};
