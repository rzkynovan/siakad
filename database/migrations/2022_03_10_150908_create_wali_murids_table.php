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
        Schema::create('wali_murids', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained();
            $table->string('nama_ayah');
            $table->text('alamat_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('no_hp_ayah');
            $table->string('nama_ibu',);
            $table->text('alamat_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('no_hp_ibu');
            $table->string('nama_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('no_hp_wali')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wali_murids');
    }
};
