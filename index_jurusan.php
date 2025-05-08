<?php
require_once 'jurusan.php';
$jurusan = new jurusan($pdo);
$data = $jurusan->getAll();
?>
<!DOCTYPE html>
<html>
<head>
 <title>Data jurusan</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
rel="stylesheet">
</head>
<body class="container mt-4">
 <h2>Data jurusan Mahasiswa</h2>
 <a href="form_jurusan.php" class="btn btn-primary mb-2">+ Tambah jurusan mahasiswa</a>
 <a href="index.php" class="btn btn-primary mb-2">Kembali</a>
 <table class="table table-bordered table-striped">
 <thead>
 <tr>
 <th>ID</th><th>Nama jurusan</th> 
 </tr>
 </thead>
 <tbody>
 <?php foreach ($data as $jurusan): ?>
 <tr>
 <td><?= $jurusan['id'] ?></td>
 <td><?= $jurusan['nama_jurusan'] ?></td>
 <td>
 <a href="form_jurusan.php?id=<?= $jurusan['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
 <a href="proses_jurusan.php?hapus=<?= $jurusan['id'] ?>" class="btn btn-danger btn-sm" 
 onclick="return confirm('Yakin hapus?')">Hapus</a>
 </td>
 </tr>
 <?php endforeach ?>
 </tbody>
 </table>
</body>
</html>