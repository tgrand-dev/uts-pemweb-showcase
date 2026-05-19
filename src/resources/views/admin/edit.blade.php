<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Status Progress Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 font-sans">

    <div class="container mx-auto px-4 py-12 max-w-md">
        <a href="{{ route('admin.dashboard') }}" class="inline-block text-emerald-400 hover:text-emerald-300 text-sm mb-6 transition">
            &larr; Kembali ke Dashboard Admin
        </a>

        <div class="bg-gray-800 rounded-xl p-6 md:p-8 border border-gray-700 shadow-xl">
            <h2 class="text-xl font-bold text-white mb-2">Update Status Progress</h2>
            <p class="text-gray-400 text-xs mb-6">Ubah status tahapan pengerjaan laporan awal proyek web.</p>

            <div class="mb-4 p-4 bg-gray-900 rounded-lg border border-gray-700">
                <span class="block text-xs font-semibold text-gray-500 uppercase mb-1">Nama Project</span>
                <span class="text-sm font-bold text-white">BorrowMinder - {{ $project->title }}</span>
            </div>

            <form action="{{ route('admin.update', $project->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                
                <div>
                    <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Pilih Status Baru</label>
                    <select name="progress_status" class="w-full bg-gray-900 border border-gray-700 rounded-lg px-3 py-2 text-white focus:outline-none focus:border-emerald-500 transition">
                        <option value="Proposal Laporan Awal" {{ $project->progress_status == 'Proposal Laporan Awal' ? 'selected' : '' }}>Proposal Laporan Awal</option>
                        <option value="Analisis Sistem & Fitur" {{ $project->progress_status == 'Analisis Sistem & Fitur' ? 'selected' : '' }}>Analisis Sistem & Fitur</option>
                        <option value="Perancangan Arsitektur" {{ $project->progress_status == 'Perancangan Arsitektur' ? 'selected' : '' }}>Perancangan Arsitektur</option>
                        <option valueSelesai Dokumen Awal" {{ $project->progress_status == 'Selesai Dokumen Awal' ? 'selected' : '' }}>Selesai Dokumen Awal</option>
                    </select>
                </div>

                <button type="submit" class="w-full bg-emerald-500 text-gray-900 font-bold py-2.5 rounded-lg hover:bg-emerald-400 transition tracking-wider text-sm shadow-lg uppercase">
                    Simpan Perubahan
                </button>
            </form>
        </div>
    </div>

</body>
</html>