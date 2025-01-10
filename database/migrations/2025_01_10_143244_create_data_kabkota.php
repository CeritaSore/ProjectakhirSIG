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
        Schema::create('data_kabkota', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->unsignedBigInteger('nama_data_id');
            $table->unsignedBigInteger('kota_id');
            $table->foreign('nama_data_id')->references('id')->on('nama_data')->onDelete('cascade');
            $table->foreign('kota_id')->references('id')->on('kabkota')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kabkota');
    }
};
