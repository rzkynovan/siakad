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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            // $table->boolean('is_alumni')->default(false);
            
            $table->string('gender')->nullable();
            $table->string('nis')->uniqid();
            $table->string('nisn')->uniqid();
            $table->string('nists')->uniqid();
            $table->text('tempat_lahir')->nullable();
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('alamat')->nullable();
            $table->string('asal_kota');
            $table->string('alamat_asal')->nullable();
            $table->string('alamat_kost')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('siswas');
    }
};
