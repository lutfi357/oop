<?php
require_once 'mahasiswa.php';
$mahasiswa = new mahasiswa($pdo);

// Simpan atau Update
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];  // ID hanya untuk update
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan_id = $_POST['jurusan_id'];

    if ($id) {
        // Update data jika id ada
        $mahasiswa->update($id, $nama, $nim, $jurusan_id);
    } else {
        // Insert data jika id kosong
        $mahasiswa->insert($nama, $nim, $jurusan_id);
    }

    header("Location: index_mahasiswa.php");
    exit;
}

// Hapus
if (isset($_GET['hapus'])) {
    $mahasiswa->delete($_GET['hapus']);
    header("Location: index_mahasiswa.php");
    exit;
}
?>
