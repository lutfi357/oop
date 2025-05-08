<?php
require_once 'nilai.php';
$nilaiObj = new Nilai($pdo); // Rename the object variable

// Simpan atau Update
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $mahasiswa_id = $_POST['mahasiswa_id'];
    $mata_kuliah_id = $_POST['mata_kuliah_id'];
    $nilai = $_POST['nilai']; // Keep POST value in $nilai (string)

    if ($id) {
        // Use the object $nilaiObj to call update()
        $nilaiObj->update($id, $mahasiswa_id, $mata_kuliah_id, $nilai);
    } else {
        // Use the object $nilaiObj to call insert()
        $nilaiObj->insert($mahasiswa_id, $mata_kuliah_id, $nilai); // Remove $id for insert
    }

    header("Location: index_nilai.php");
    exit;
}

// Hapus
if (isset($_GET['hapus'])) {
    $nilaiObj->delete($_GET['hapus']);
    header("Location: index_nilai.php");
    exit;
}
?>