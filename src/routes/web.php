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
Route::get('/peminjaman', function () {
    return view('peminjaman'); 
});
// Route POST untuk menerima kiriman data dari formulir peminjaman
Route::post('/peminjaman', [\App\Http\Controllers\ProjectController::class, 'storePeminjaman'])->name('peminjaman.store');
// Form edit untuk mengubah status progress project
Route::get('/admin/project/{id}/edit', [AdminProjectController::class, 'edit'])->name('admin.edit');

// Proses update status progress ke database
Route::put('/admin/project/{id}', [AdminProjectController::class, 'update'])->name('admin.update');
// Route untuk melihat seluruh data peminjaman yang sudah disimpan
Route::get('/admin/daftar-peminjaman', function () {
    $dataPeminjaman = \DB::table('peminjamans')->get();
    return view('daftar_peminjaman', compact('dataPeminjaman'));
});
// Route untuk menghapus data peminjaman berdasarkan ID
Route::delete('/admin/daftar-peminjaman/{id}', function ($id) {
    \DB::table('peminjamans')->where('id', $id)->delete();
    return redirect('/admin/daftar-peminjaman')->with('success', 'Data berhasil dihapus!');
})->name('peminjaman.destroy');