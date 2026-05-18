<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showcase Portofolio Project Akhir - UTS Pemweb</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 font-sans">

    <header class="bg-gray-800 shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-emerald-400 tracking-wide">PORTFOLIO SHOWCASE</h1>
            <nav class="space-x-6">
                <a href="#projects" class="hover:text-emerald-400 transition">Projects</a>
                <a href="#contact" class="hover:text-emerald-400 transition">Contact</a>
                <a href="/admin/dashboard" class="bg-emerald-500 text-gray-900 px-4 py-2 rounded font-semibold hover:bg-emerald-400 transition">Admin Dashboard</a>
            </nav>
        </div>
    </header>

    <section class="bg-gradient-to-b from-gray-800 to-gray-900 py-20 text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Repository Project Akhir Mahasiswa</h2>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg mb-8">Kumpulan laporan awal, analisis kebutuhan sistem, dan arsitektur teknologi dari pengerjaan proyek akhir pemrograman web.</p>
            <a href="#projects" class="bg-emerald-500 text-gray-900 px-6 py-3 rounded-lg font-bold hover:bg-emerald-400 transition shadow-lg">Lihat Daftar Project</a>
        </div>
    </section>

    <section id="projects" class="container mx-auto px-6 py-16">
        <h3 class="text-2xl font-bold border-b-2 border-emerald-500 inline-block mb-10 pb-2">Daftar Project Akhir</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projects as $project)
                <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg border border-gray-700 hover:border-emerald-500 transition duration-300 flex flex-col justify-between">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="text-xs font-semibold px-2.5 py-1 rounded bg-gray-700 text-emerald-400 border border-emerald-500/30">
                                {{ $project->progress_status }}
                            </span>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-2">{{ $project->title }}</h4>
                        <p class="text-gray-400 text-sm line-clamp-3 mb-4">{{ $project->description }}</p>
                    </div>
                    <div class="p-6 pt-0 border-t border-gray-700/50 bg-gray-800/50">
                        <a href="/project/{{ $project->id }}" class="block text-center bg-gray-700 hover:bg-emerald-500 hover:text-gray-900 text-white font-semibold py-2 rounded transition">
                            Lihat Detail Laporan
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12 bg-gray-800 rounded-xl border border-dashed border-gray-700">
                    <p class="text-gray-400">Belum ada data project di database. Silakan isi manual via phpMyAdmin atau pastikan seeder berjalan.</p>
                </div>
            @endforelse
        </div>
    </section>

    <section id="contact" class="bg-gray-800/50 border-t border-gray-800 py-16">
        <div class="container mx-auto px-6 max-w-xl">
            <h3 class="text-2xl font-bold text-center text-white mb-2">Hubungi Kami</h3>
            <p class="text-gray-400 text-center text-sm mb-8">Kirimkan masukan atau pertanyaan Anda mengenai isi dokumen proyek di atas.</p>

            @if(session('success'))
                <div class="bg-emerald-500/10 border border-emerald-500 text-emerald-400 p-4 rounded-lg mb-6 text-sm text-center">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Nama Lengkap</label>
                    <input type="text" name="name" required class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-emerald-500 transition">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Alamat Email</label>
                    <input type="email" name="email" required class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-emerald-500 transition">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Isi Pesan</label>
                    <textarea name="message" rows="4" required class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-emerald-500 transition"></textarea>
                </div>
                <button type="submit" class="w-full bg-emerald-500 text-gray-900 font-bold py-3 rounded-lg hover:bg-emerald-400 transition shadow-lg uppercase tracking-wider text-sm">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </section>

    <footer class="bg-gray-900 text-center py-6 border-t border-gray-800 text-xs text-gray-500">
        &copy; 2026 UTS Pemrograman Web - Arsitektur MVC Laravel. All Rights Reserved.
    </footer>

</body>
</html>