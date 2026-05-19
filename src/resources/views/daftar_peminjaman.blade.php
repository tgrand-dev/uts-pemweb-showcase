<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang Pinjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container bg-white p-4 rounded shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>📋 Daftar Barang Pinjaman Baru</h2>
            <a href="/peminjaman" class="btn btn-primary">+ Tambah Pinjaman Baru</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Nama Peminjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Status</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($dataPeminjaman as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->nama_peminjam }}</td>
                        <td>{{ $item->tgl_pinjam }}</td>
                        <td><span class="badge bg-warning text-dark">{{ $item->status }}</span></td>
                        <td class="text-center">
                            <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin mau menghapus data ini, Ghar?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">Belum ada data peminjaman yang tersimpan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>