<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurnalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('penulis', 45);
            $table->string('judul', 45);
            $table->text('abstrak');
            $table->integer('tahun');
            $table->string('cover', 45);
            $table->string('file', 45);
            $table->unsignedBigInteger('kategori_jurnal_id');
            $table->foreign('kategori_jurnal_id')->references('id')->on('kategori_jurnal');
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
        Schema::dropIfExists('jurnal');
    }
}
