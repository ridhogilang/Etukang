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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tukang_id');
            $table->string('namatukang');
            $table->foreignId('jenislayanan_id');
            $table->string('harga');
            $table->foreignId('user_id');
            $table->string('nama');
            $table->foreignId('kecamatan_id');
            $table->string('alamat');
            $table->string('tanggal');
            $table->text('kerusakan');
            $table->text('invoice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
