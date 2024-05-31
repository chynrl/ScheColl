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
        Schema::create('matkul', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_mata_kuliah');
            $table->text('deskripsi');
            $table->integer('semester');
            $table->integer('sks');
            $table->string('dosen');
            $table->string('kelompok_keahlian');
            $table->string('hari');
            $table->string('waktu');
            $table->string('ruang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matkul');
    }
};
