<?php
require_once 'mk.php';
$mata_kuliah = new mata_kuliah($pdo);
$data = $mata_kuliah->getAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2>Data Mata Kuliah</h2>
    <a href="form_mk.php" class="btn btn-primary mb-2">+ Tambah Mata Kuliah</a>
    <a href="index.php" class="btn btn-primary mb-2">kembali</a>
    
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $mk): ?>
                <tr>
                    <td><?= htmlspecialchars($mk['id']) ?></td>
                    <td><?= htmlspecialchars($mk['nama_mk']) ?></td>
                    <td><?= htmlspecialchars($mk['sks']) ?></td>
                    <td>
                        <a href="form_mk.php?id=<?= $mk['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="proses_mk.php?hapus=<?= $mk['id'] ?>" class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
