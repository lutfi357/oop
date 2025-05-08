<?php
require_once 'jurusan.php';
$jurusan = new jurusan($pdo);
$id = $_GET['id'] ?? '';
$data = [
 'id' => '',
 'nama_jurusan' => ''
];
if ($id) {
 $data = $jurusan->getById($id);
}
?>
<!DOCTYPE html>
<html>
<head>
 <title><?= $id ? 'Edit' : 'Tambah' ?> jurusan</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">
</head>
<body class="container mt-4">
 <h2><?= $id ? 'Edit' : 'Tambah' ?> id</h2>
 <form action="proses_jurusan.php" method="POST">
 </div>
 <div class="mb-3">
 <label>nama jurusan</label>
 <input type="text" name="nama_jurusan" class="form-control" required value="<?= $data['nama_jurusan'] ?>">
 </div>
 <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
 <a href="index_jurusan.php" class="btn btn-secondary">Kembali</a>
 </form>
</body>
</html>
