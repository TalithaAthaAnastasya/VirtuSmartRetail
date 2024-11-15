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
        Schema::create('retur_barang', function (Blueprint $table) {
            $table->id('id_retur');
            $table->foreignId('id_po')->constrained('purchase_orders', 'id_po');
            $table->date('tanggal_retur');
            $table->foreignId('diajukan_oleh')->constrained('karyawan', 'id_karyawan');
            $table->enum('status', ['pending', 'disetujui', 'ditolak', 'selesai']);
            $table->text('alasan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retur_barang');
    }
};
