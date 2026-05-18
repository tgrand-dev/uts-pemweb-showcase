<?php
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminProjectController;

// --- ROUTE HALAMAN DEPAN / SHOWCASE PORTFOLIO ---
// Halaman utama menampilkan list project portofolio
Route::get('/', [ProjectController::class, 'index'])->name('showcase.index');

// Halaman detail isi laporan awal suatu project
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('showcase.show');


// --- ROUTE FORM KONTAK DINAMIS ---
// Proses submit/simpan pesan dari form kontak
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


// --- ROUTE BACKEND / PANEL ADMIN (CRUD STATUS) ---
// Dashboard admin untuk melihat list project & statusnya
Route::get('/admin/dashboard', [AdminProjectController::class, 'index'])->name('admin.dashboard');

// Form edit untuk mengubah status progress project
Route::get('/admin/project/{id}/edit', [AdminProjectController::class, 'edit'])->name('admin.edit');

// Proses update status progress ke database
Route::put('/admin/project/{id}', [AdminProjectController::class, 'update'])->name('admin.update');