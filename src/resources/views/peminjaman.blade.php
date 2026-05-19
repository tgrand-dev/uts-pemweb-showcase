<!DOCTYPE html>
<html>
<head>
    <title>Borrow Minder - Input Pinjaman</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Catat Barang Pinjaman Baru</h2>
  <form action="{{ route('peminjaman.store') }}" method="POST">
    @csrf 
    <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Nama Peminjam</label>
        <input type="text" name="nama_peminjam" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Tanggal Pinjam</label>
        <input type="date" name="tanggal_pinjam" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan Data</button>
</form>