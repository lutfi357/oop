<?php
require_once 'mahasiswa.php';
$mahasiswa = new mahasiswa($pdo);
$id = $_GET['id'] ?? '';
$data = [
 'id' => '',
 'nama' => '',
 'nim' => '',
 'jurusan_id' => ''
];
if ($id) {
 $data = $mahasiswa->getById($id);
}
?>
<!DOCTYPE html>
<html>
<head>
 <title><?= $id ? 'Edit' : 'Tambah' ?> Mahasiswa</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">
</head>
<body class="container mt-4">
 <h2><?= $id ? 'Edit' : 'Tambah' ?> Mahasiswa</h2>
 <form action="proses_mahasiswa.php" method="POST">
 <input type="hidden" name="id" value="<?= $id ?>">
 <div class="mb-3">
 
 <input type="hidden" name="id" class="form-control" required value="<?= $data['id']
?>">
 </div>
 <div class="mb-3">
 <label>nama</label>
 <input type="text" name="nama" class="form-control" required value="<?= $data['nama'] ?>">
 </div>
 <div class="mb-3">
 <label>nim</label>
 <input type="text" name="nim" class="form-control" required value="<?=
$data['nim'] ?>">
 </div>
 <div class="mb-3">
 <label>jurusan_id</label>
 <input type="text" name="jurusan_id" class="form-control" required value="<?=
$data['jurusan_id'] ?>">
 </div>
 <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
 <a href="index_mahasiswa.php" class="btn btn-secondary">Kembali</a>
 </form>
</body>
</html>
