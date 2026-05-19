<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - UTS Pemweb</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 font-sans">

    <div class="flex flex-col min-h-screen">
        <header class="bg-gray-800 border-b border-gray-700 py-4 px-6 flex justify-between items-center">
            <h1 class="text-lg font-bold text-emerald-400">ADMIN PANEL UTS</h1>
            <a href="{{ route('showcase.index') }}" class="text-sm bg-gray-700 hover:bg-gray-600 px-4 py-2 rounded text-white transition">
                &larr; Lihat Tampilan Web Depan
            </a>
        </header>

        <main class="flex-1 container mx-auto px-4 py-10 max-w-5xl">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold text-white">Kelola Progress Project Akhir</h2>
            </div>

            @if(session('success'))
                <div class="bg-emerald-500/10 border border-emerald-500 text-emerald-400 p-4 rounded-lg mb-6 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden shadow-lg">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-750 border-b border-gray-700 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                            <th class="p-4">ID</th>
                            <th class="p-4">Judul Project</th>
                            <th class="p-4">Status Progress</th>
                            <th class="p-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700 text-sm text-gray-300">
                        @forelse($projects as $project)
                            <tr class="hover:bg-gray-700/30 transition">
                                <td class="p-4 font-mono text-gray-500">{{ $project->id }}</td>
                               <td class="p-4 font-semibold text-white">BorrowMinder - {{ $project->title }}</td>
                                <td class="p-4">
                                    <span class="px-2.5 py-1 text-xs font-semibold rounded bg-gray-900 text-emerald-400 border border-emerald-500/20">
                                        {{ $project->progress_status }}
                                    </span>
                                </td>
                                <td class="p-4 text-center">
                                    <a href="/admin/project/{{ $project->id }}/edit" class="inline-block bg-emerald-500 hover:bg-emerald-400 text-gray-900 font-bold px-3 py-1.5 rounded text-xs transition">
                                        Edit Status
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="p-8 text-center text-gray-500">Belum ada data project di database.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>