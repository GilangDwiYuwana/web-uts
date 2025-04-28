<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peserta');
            $table->string('email');
            $table->string('nama_kursus');
            $table->string('kategori_kursus');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->enum('status_pendaftaran', ['terdaftar', 'aktif', 'selesai', 'dibatalkan']);
            $table->softDeletes(); // <- untuk soft delete
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
}
