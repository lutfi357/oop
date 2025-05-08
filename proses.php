<?php
require_once 'Mahasiswa.php';
$mahasiswa = new Mahasiswa($pdo);
// Simpan atau Update
if (isset($_POST['simpan'])) {
 $id = $_POST['id'];
 $nama = $_POST['nama'];
 $nim = $_POST['nim'];
 $jurusan = $_POST['jurusan'];
 if ($id) {
 $mahasiswa->update($id, $nama, $nim, $jurusan);
 } else {
 $mahasiswa->insert($nama, $nim, $jurusan);
 }
 header("Location: index.php");
 exit;
}
// Hapus
if (isset($_GET['hapus'])) {
 $mahasiswa->delete($_GET['hapus']);
 header("Location: index.php");
 exit;
}
?>