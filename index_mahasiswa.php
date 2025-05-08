<?php
require_once 'mahasiswa.php';
$mahasiswa = new mahasiswa($pdo);
$data = $mahasiswa->getAll();
?>
<!DOCTYPE html>
<html>
<head>
 <title>Data mahasiswa</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
rel="stylesheet">
</head>
<body class="container mt-4">
 <h2>Data Mahasiswa</h2>
 <a href="form_mahasiswa.php" class="btn btn-primary mb-2">+ Tambah mahasiswa</a>
 <a href="index.php" class="btn btn-primary mb-2">kembali</a>
 <table class="table table-bordered table-striped">
 <thead>
 <tr>
 <th>ID</th><th>Nama</th><th>nilai</th><th>jurusan_id</th> 
 </tr>
 </thead>
 <tbody>
 <?php foreach ($data as $mahasiswa): ?>
 <tr>
 <td><?= $mahasiswa['id'] ?></td>
 <td><?= $mahasiswa['nama'] ?></td>
 <td><?= $mahasiswa['nim'] ?></td>
 <td><?= $mahasiswa['jurusan_id'] ?></td>
 <td>
 <a href="form_mahasiswa.php?id=<?= $mahasiswa['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
 <a href="proses_mahasiswa.php?hapus=<?= $mahasiswa['id'] ?>" class="btn btn-danger btn-sm" 
 onclick="return confirm('Yakin hapus?')">Hapus</a>
 </td>
 </tr>
 <?php endforeach ?>
 </tbody>
 </table>
</body>
</html>