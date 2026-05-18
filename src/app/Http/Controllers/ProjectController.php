<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    // Halaman Menu Showcase / Daftar Project
    public function index()
    {
        // Mengambil semua data project dari database
        $projects = DB::table('projects')->get();
        return view('showcase.index', compact('projects'));
    }

    // Halaman Detail Khusus untuk Laporan Awal Project Akhir
    public function show($id)
    {
        // Mengambil 1 data project berdasarkan ID
        $project = DB::table('projects')->where('id', $id)->first();
        
        if (!$project) {
            abort(404, 'Project tidak ditemukan');
        }

        return view('showcase.show', compact('project'));
    }
}