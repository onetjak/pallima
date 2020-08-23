<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_hp')->unique();
            $table->string('nama');
            $table->string('jabatan');
            $table->string('kategori');
            $table->string('alamat');
            $table->string('masa_bhakti');
            $table->string('mulai');
            $table->string('berakhir');
            $table->string('sk');
            $table->string('tanggal');
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
        Schema::dropIfExists('pengurus');
    }
}
