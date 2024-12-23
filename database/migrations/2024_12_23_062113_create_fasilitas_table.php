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
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_bangunan')->constrained('bangunans')->cascadeOnDelete();
            $table->boolean('cctv')->default(false);
            $table->boolean('dapur')->default(false);
            $table->boolean('jemuran')->default(false);
            $table->boolean('ac')->default(false);
            $table->boolean('bantal')->default(false);
            $table->boolean('dispenser')->default(false);
            $table->boolean('air_panas')->default(false);
            $table->boolean('kamar_mandi_dalam')->default(false);
            $table->boolean('kloset_duduk')->default(false);
            $table->boolean('kloset_jongkok')->default(false);
            $table->boolean('parkir_mobil')->default(false);
            $table->boolean('parkir_motor')->default(false);
            $table->boolean('listrik')->default(false);
            $table->boolean('bayar_air')->default(false);
            $table->boolean('wifi')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas');
    }
};
