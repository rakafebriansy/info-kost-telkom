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
        Schema::create('ketersediaan_kamars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_bangunan')->constrained('bangunans')->cascadeOnDelete();
            $table->enum('ukuran_kamar',['3x3','3x4','Custom']);
            $table->integer('jumlah_total_kamar');
            $table->integer('jumlah_kamar_tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ketersediaan_kamars');
    }
};
