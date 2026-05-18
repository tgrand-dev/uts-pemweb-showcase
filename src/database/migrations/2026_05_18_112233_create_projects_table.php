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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');               // Judul Project Akhir Anda
            $table->text('description');         // Deskripsi Singkat
            $table->text('problem_analysis');    // Analisis Masalah & Kebutuhan Sistem
            $table->text('system_requirements'); // Kebutuhan Fitur Utama
            $table->text('tech_stack');          // Arsitektur & Penjelasan Teknologi
            $table->string('diagram_image');     // File gambar ERD / Flowchart
            $table->string('pdf_file');          // File dokumen laporan awal .pdf
            $table->string('progress_status');   // Status Progress Laporan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
}; 