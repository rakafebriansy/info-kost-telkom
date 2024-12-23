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
        Schema::create('bangunans', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis',['kos','apartemen','kontrakan']);
            $table->string('nama');
            $table->enum('tipe',['putra','putri','campur']);
            $table->text('deskripsi');
            $table->text('peraturan');
            $table->integer('tahun_dibangun');
            $table->integer('jumlah_laporan');
            $table->enum('status',['pending','diterima','ditolak']);
            $table->enum('kategori',['rekomendasi','reguler']);
            $table->integer('harga');
            $table->boolean('is_overkos');
            $table->boolean('is_active');
            $table->boolean('is_nego');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bangunans');
    }
};
