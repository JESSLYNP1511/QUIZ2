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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id(); 
            $table->string('kode_barang'); 
            $table->char('nama_barang', length: 20);  
            $table->string('satuan',);  
            $table->integer('harga_jual',);  
            $table->integer('harga_beli',);  
            $table->integer('stok',);  
            $table->string('status',);  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
