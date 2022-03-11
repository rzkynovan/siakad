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
        Schema::create('panjars', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan')->nullable();
            $table->date('tanggal_pelaksanaan');
            $table->date('tanggal_pelaporan');
            $table->string('nama_uraian');
            $table->string('spesifikasi')->nullable();
            $table->integer('satuan')->nullable();
            $table->integer('jumlah')->nullable();
            $table->integer('harga')->nullable();
            $table->integer('total')->nullable();
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
        Schema::dropIfExists('panjars');
    }
};
