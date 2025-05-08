<?php
require_once 'nilai.php';
$nilai = new nilai($pdo);
$data = $nilai->getAll();
?>
<!DOCTYPE html>
<html>
<head>
 <title>nilai</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
rel="stylesheet">
</head>
<body class="container mt-4">
 <h2>nilai</h2>
 <a href="form_nilai.php" class="btn btn-primary mb-2">+ Tambah nilai</a>
 <a href="index.php" class="btn btn-primary mb-2">kembali</a>
 <table class="table table-bordered table-striped">
 <thead>
 <tr>
 <th>id</th><th>mahasiswa_id</th><th>mata kuliah id</th><th>nilai</th> 
 </tr>
 </thead>
 <tbody>
 <?php foreach ($data as $nilai): ?>
 <tr>
 <td><?= $nilai['id'] ?></td>
 <td><?= $nilai['mahasiswa_id'] ?></td>
 <td><?= $nilai['mata_kuliah_id'] ?></td>
 <td><?= $nilai['nilai'] ?></td>
 <td>
 <a href="form_nilai.php?id=<?= $nilai['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
 <a href="proses_nilai.php?hapus=<?= $nilai['id'] ?>" class="btn btn-danger btn-sm" 
 onclick="return confirm('Yakin hapus?')">Hapus</a>
 </td>
 </tr>
 <?php endforeach ?>
 </tbody>
 </table>
</body>
</html>