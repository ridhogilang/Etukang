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
        Schema::create('form_tukangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tukang_id');
            $table->string('nama');
            $table->foreignId('jenislayanan_id');
            $table->string('alamat');
            $table->foreignId('kecamatan_id');
            $table->bigInteger('nomor');
            $table->string('sertifikat');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_tukangs');
    }
};
