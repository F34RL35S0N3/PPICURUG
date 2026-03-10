<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('surat', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat')->nullable();
            $table->enum('jenis_surat', [
                'Surat Proposal',
                'Surat Izin',
                'Surat Permohonan',
                'Surat Keterangan',
                'Surat Undangan',
                'Surat Tugas',
                'Surat Lainnya',
            ]);
            $table->string('perihal');
            $table->string('pengirim');
            $table->string('penerima');
            $table->date('tanggal_surat');
            $table->date('tanggal_terima')->nullable();
            $table->enum('status', ['Diproses', 'Disetujui', 'Ditolak', 'Selesai'])->default('Diproses');
            $table->text('keterangan')->nullable();
            $table->string('file_path')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('surat');
    }
};
