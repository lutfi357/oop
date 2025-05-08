<?php
require_once 'mk.php';
$mata_kuliah = new mata_kuliah($pdo);

// Simpan atau Update
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];  // ID hanya untuk update
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];
   
    if ($id) {
        // Update data jika id ada
        $mata_kuliah->update($id, $nama_mk, $sks);
    } else {
        // Insert data jika id kosong
        $mata_kuliah->insert($id, $nama_mk, $sks);
    }

    header("Location: index_mk.php");
    exit;
}

// Hapus
if (isset($_GET['hapus'])) {
    $mata_kuliah->delete($_GET['hapus']);
    header("Location: index_mk.php");
    exit;
}
?>
