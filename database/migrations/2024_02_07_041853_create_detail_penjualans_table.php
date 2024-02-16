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
        Schema::create('detail_penjualans', function (Blueprint $table) {
            $table->integer('DetailID');
            $table->integer('PenjualanID');
            $table->integer('ProdukID');
            $table->integer('JumlahProduk');
            $table->decimal('Subtotal',10,2);
            $table->foreign('PenjualanID')->references('PenjualanID')->on('penjualans')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ProdukID')->references('ProdukID')->on('produks')->onDelete('cascade')->onUpdate('cascade');
            $table->primary('DetailID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_penjualans');
    }
};
