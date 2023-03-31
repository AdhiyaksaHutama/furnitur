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
        //
        Schema::create('pendidikans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('sku');
            $table->string('warna');
            $table->string('filenames');
            $table->string('category');
            $table->string('flashsale');
            $table->string('harga');
            $table->string('harga_diskon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('pendidikans');
    }
};
