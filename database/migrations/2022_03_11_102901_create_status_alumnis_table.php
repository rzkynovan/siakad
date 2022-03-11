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
        Schema::create('status_alumnis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alumni_id')->constrained();
            $table->foreignId('industri_id')->constrained();
            $table->foreignId('perguruan_tinggi_id')->constrained();
            $table->foreignId('usaha_id')->constrained();

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
        Schema::dropIfExists('status_alumnis');
    }
};
