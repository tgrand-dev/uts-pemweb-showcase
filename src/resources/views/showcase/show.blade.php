<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }} - Detail Laporan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 font-sans leading-relaxed">

    <div class="container mx-auto px-4 py-10 max-w-4xl">
        <a href="{{ route('showcase.index') }}" class="inline-flex items-center text-emerald-400 hover:text-emerald-300 font-medium mb-6 transition">
            &larr; Kembali ke Beranda
        </a>

        <div class="bg-gray-800 rounded-xl p-6 md:p-8 border border-gray-700 shadow-md mb-8">
            <div class="flex items-center space-x-3 mb-3">
                <span class="text-xs font-semibold px-2.5 py-1 rounded bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                    Status: {{ $project->progress_status }}
                </span>
            </div>
            <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-4">{{ $project->title }}</h1>
            <p class="text-gray-400 text-base">{{ $project->description }}</p>
        </div>

        <div class="space-y-8 bg-gray-800 rounded-xl p-6 md:p-8 border border-gray-700 shadow-md">
            <div>
                <h3 class="text-lg font-bold text-white border-l-4 border-emerald-500 pl-3 mb-3">1. Analisis Masalah & Latar Belakang</h3>
                <p class="text-gray-300 whitespace-pre-line text-sm md:text-base">{{ $project->problem_analysis }}</p>
            </div>

            <hr class="border-gray-700">

            <div>
                <h3 class="text-lg font-bold text-white border-l-4 border-emerald-500 pl-3 mb-3">2. Kebutuhan Sistem & Fitur Utama</h3>
                <p class="text-gray-300 whitespace-pre-line text-sm md:text-base">{{ $project->system_requirements }}</p>
            </div>

            <hr class="border-gray-700">

            <div>
                <h3 class="text-lg font-bold text-white border-l-4 border-emerald-500 pl-3 mb-3">3. Arsitektur & Spesifikasi Teknologi</h3>
                <p class="text-gray-300 whitespace-pre-line text-sm md:text-base">{{ $project->tech_stack }}</p>
            </div>

            <hr class="border-gray-700">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                <div class="bg-gray-900 p-4 rounded-lg border border-gray-700">
                    <h4 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-2">Diagram ERD / Flowchart</h4>
                    <p class="text-xs text-gray-500 mb-2">Nama File Gambar: <code class="text-emerald-400">{{ $project->diagram_image }}</code></p>
                    <div class="bg-gray-800 h-32 rounded flex items-center justify-center border border-gray-700">
                        <span class="text-xs text-gray-400">[ Preview Gambar Diagram ]</span>
                    </div>
                </div>

                <div class="bg-gray-900 p-4 rounded-lg border border-gray-700 flex flex-col justify-between">
                    <div>
                        <h4 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-2">Dokumen Proposal Lengkap</h4>
                        <p class="text-xs text-gray-500 mb-2">File PDF: <code class="text-emerald-400">{{ $project->pdf_file }}</code></p>
                    </div>
                    <a href="#" class="mt-4 block text-center bg-gray-700 hover:bg-gray-600 text-white font-medium py-2 rounded text-sm transition">
                        Download Dokumen (.pdf)
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>