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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('jabatan_id');
            $table->foreignId('jabatan_id')->constrained();
            // $table->boolean('is_walas')->default(false);
            $table->string('gender')->nullable();
            $table->integer('nip')->uniqid();
            $table->string('alamat')->nullable();
            $table->softDeletes();
            $table->timestamps();

            // $table->foreign('jabatan_id')->references('id')->on('jabatans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawais');
    }
};
