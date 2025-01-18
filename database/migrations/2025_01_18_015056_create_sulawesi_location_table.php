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
        Schema::create('sulawesi_location', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('latitude');
            $table->float('longitude');
            $table->integer('layer');
            $table->string('file');
            $table->float('luas');
            $table->float('penduduk');
            $table->integer('tahun');
            $table->float('kepadatan');
            $table->float('jobless');

            // Kolom sekolah
            $table->integer('smp_negeri')->nullable();
            $table->integer('smp_swasta')->nullable();
            $table->integer('guru_smp_negeri')->nullable();
            $table->integer('guru_smp_swasta')->nullable();
            $table->integer('murid_smp_negeri')->nullable();
            $table->integer('murid_smp_swasta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sulawesi_location');
    }
};
