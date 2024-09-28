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
        Schema::create('dmasuks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_masuk'); 
            $table->string('kode_masuk'); 
            $table->integer('kode_barang_beli'); 
            $table->integer('jumlah'); 
            $table->integer('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dmasuks');
    }
};
