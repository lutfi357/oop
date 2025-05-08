<?php
require_once 'nilai.php';
$nilai = new nilai($pdo);
$id = $_GET['id'] ?? '';
$data = [
    'id' => '',
    'mahasiswa_id' => '',
    'mata_kuliah_id' => '',
    'nilai' => ''
];

if ($id) {
    $data = $nilai->getById($id);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $id ? 'Edit' : 'Tambah' ?> nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2><?= $id ? 'Edit' : 'Tambah' ?> nilai</h2>
    <form action="proses_nilai.php" method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        
        <div class="mb-3">
           
            <input type="hidden" name="id" class="form-control" required value="<?= $data['id'] ?>">
        </div>

        <div class="mb-3">
            <label>mahasiswa id</label>
            <input type="text" name="mahasiswa_id" class="form-control" required value="<?= $data['mahasiswa_id'] ?>">
        </div>

        <div class="mb-3">
            <label>mata kuliah id</label>
            <input type="text" name="mata_kuliah_id" class="form-control" required value="<?= $data['mata_kuliah_id'] ?>">
        </div>

        <div class="mb-3">
            <label>nilai</label>
            <input type="text" name="nilai" class="form-control" required value="<?= $data['nilai'] ?>">
        </div>

        <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
        <a href="index_nilai.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
