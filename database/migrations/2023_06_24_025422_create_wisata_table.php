<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wisata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->integer('skor_rating');
            $table->integer('harga_tiket');
            $table->string('deskripsi');
            $table->unsignedInteger('jenis_wisata_id');
            $table->unsignedInteger('kecamatan_id');
            $table->foreign('jenis_wisata_id')->references('id')->on('jenis_wisata');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisata');
    }
};
