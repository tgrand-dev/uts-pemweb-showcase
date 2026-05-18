<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pinjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Barang yang Dipinjam</h2>
        <a href="/peminjaman" class="btn btn-primary">+ Tambah Pinjaman</a>
    </div>
    
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
         <table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Nama Barang</th>
            <th>Peminjam</th>
            <th>Tanggal Pinjam</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($semua_pinjaman as $item)
        <tr>
            <td>{{ $item->nama_barang }}</td>
            <td>{{ $item->nama_peminjam }}</td>
            <td>{{ $item->tgl_pinjam }}</td>
            <td><span class="badge bg-warning text-dark">{{ $item->status }}</span></td>
            <td>
                <a href="/peminjaman/hapus/{{ $item->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    <tr>
        <th>Nama Barang</th>
        <th>Peminjam</th>
        <th>Tanggal Pinjam</th>
        <th>Status</th>
        <th>Aksi</th> </tr>
</thead>
        </thead>
        <tbody>
            @foreach($semua_pinjaman as $item)
            <tr>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->nama_peminjam }}</td>
                <td>{{ $item->tgl_pinjam }}</td>
                <td>
                    <span class="badge bg-warning text-dark">{{ $item->status }}</span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>