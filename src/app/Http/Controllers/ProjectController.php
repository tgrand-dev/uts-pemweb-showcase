<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    // Fungsi untuk menampilkan halaman utama / portfolio showcase
    public function index()
    {
        $projects = DB::table('projects')->get();
        return view('showcase.index', compact('projects'));
    }

    // Fungsi untuk menampilkan detail isi laporan suatu project
    public function show($id)
    {
        $project = DB::table('projects')->where('id', $id)->first();
        if (!$project) {
            abort(404);
        }
        return view('showcase.show', compact('project'));
    }

    // Fungsi khusus untuk menyimpan data barang pinjaman baru
    public function storePeminjaman(Request $request)
    {
        DB::table('peminjamans')->insert([
            'nama_barang'   => $request->input('nama_barang'),
            'nama_peminjam' => $request->input('nama_peminjam'),
            'tgl_pinjam'    => $request->input('tanggal_pinjam'),
            'status'        => 'Dipinjam',
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);

        // Ganti /admin/dashboard menjadi /admin/daftar-peminjaman
return redirect('/admin/daftar-peminjaman')->with('success', 'Data peminjaman berhasil masuk!');
    }
}