<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    // Halaman daftar pinjaman
    public function index()
    {
        $semua_pinjaman = Peminjaman::all();
        return view('daftar_peminjaman', compact('semua_pinjaman'));
    }

    // Fungsi simpan data
    public function store(Request $request)
    {
        Peminjaman::create([
            'nama_barang'   => $request->nama_barang,
            'nama_peminjam' => $request->nama_peminjam,
            'tgl_pinjam'    => $request->tgl_pinjam,
            'status'        => 'Dipinjam',
        ]);

        return redirect('/daftar-peminjaman');
    }
    // Fungsi untuk menghapus data
    public function destroy($id)
    {
        $data = \App\Models\Peminjaman::findOrFail($id);
        $data->delete();

        return redirect('/daftar-peminjaman');
    }
}