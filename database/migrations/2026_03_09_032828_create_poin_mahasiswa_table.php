<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('poin_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('npm', 20);
            $table->string('nama_mahasiswa');
            $table->string('kelas');
            $table->enum('kategori', ['prestasi', 'pelanggaran']);
            $table->string('kegiatan');
            $table->date('tanggal');
            $table->integer('nilai'); // always positive, sign determined by kategori
            $table->string('pengasuh');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('poin_mahasiswa');
    }
};
