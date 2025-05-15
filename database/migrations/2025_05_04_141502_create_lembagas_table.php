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
        Schema::create('lembaga', function (Blueprint $table) {
            $table->id('lembaga_id');
            $table->string('nama_lembaga');
            $table->string('gambar');
            $table->string('deskripsi');
            $table->string('range_harga');
            $table->string('durasi_kursus');
            $table->string('lokasi');
            $table->string('maps');
            $table->string('kontak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lembaga');
    }
};
