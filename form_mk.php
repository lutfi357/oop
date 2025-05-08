<?php
require_once 'mk.php';
$mata_kuliah = new mata_kuliah($pdo);
$id = $_GET['id'] ?? '';
$data = [
    'id' => '',
    'nama_mk' => '',
    'sks' => ''
];
if ($id) {
    $data = $mata_kuliah->getById($id);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $id ? 'Edit' : 'Tambah' ?> Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2><?= $id ? 'Edit' : 'Tambah' ?> Mata Kuliah</h2>
    <form action="proses_mk.php" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($data['id']) ?>">
        
        <div class="mb-3">
            <label for="nama_mk">Nama Mata Kuliah</label>
            <input type="text" name="nama_mk" id="nama_mk" class="form-control" required value="<?= htmlspecialchars($data['nama_mk']) ?>">
        </div>
        
        <div class="mb-3">
            <label for="sks">SKS</label>
            <input type="text" name="sks" id="sks" class="form-control" required value="<?= htmlspecialchars($data['sks']) ?>">
        </div>
        
        <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
        <a href="index_mk.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
