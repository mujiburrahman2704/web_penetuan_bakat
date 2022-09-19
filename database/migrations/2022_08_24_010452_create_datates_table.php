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
        Schema::create('datates', function (Blueprint $table) {
            $table->string('Soal1'); 
            $table->string('Soal2'); 
            $table->string('Soal3'); 
            $table->string('Soal4'); 
            $table->string('Soal5'); 
            $table->string('Soal6'); 
            $table->string('Soal7'); 
            $table->string('Soal8'); 
            $table->string('Soal9'); 
            $table->string('Soal10'); 
            $table->string('Hasil'); 
            $table->id();
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
        Schema::dropIfExists('datates');
    }
};
