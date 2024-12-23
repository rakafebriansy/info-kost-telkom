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
        Schema::create('fotos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_bangunan')->constrained('bangunans')->cascadeOnDelete();
            $table->string('bangunan_depan');
            $table->string('tampilan_dalam');
            $table->string('tampak_jalan');
            $table->string('depan_kamar');
            $table->string('dalam_kamar');
            $table->string('kamar_mandi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotos');
    }
};
