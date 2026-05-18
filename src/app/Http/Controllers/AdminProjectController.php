<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProjectController extends Controller
{
    // Halaman Dashboard Admin untuk melihat list project
    public function index()
    {
        $projects = DB::table('projects')->get();
        return view('admin.dashboard', compact('projects'));
    }

    // Halaman form untuk mengedit status progress project
    public function edit($id)
    {
        $project = DB::table('projects')->where('id', $id)->first();
        return view('admin.edit', compact('project'));
    }

    // Proses memperbarui status progress ke database
    public function update(Request $request, $id)
    {
        $request->validate([
            'progress_status' => 'required|string',
        ]);

        DB::table('projects')->where('id', $id)->update([
            'progress_status' => $request->progress_status,
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Status progress berhasil diperbarui!');
    }
}