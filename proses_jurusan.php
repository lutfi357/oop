<?php
require_once 'jurusan.php';
$jurusan = new jurusan($pdo);
// Simpan atau Update
if (isset($_POST['simpan'])) {
 $id = $_POST['id'];
 $nama_jurusan = $_POST['nama_jurusan'];
 if ($id) {
 $jurusan->update($id, $nama_jurusan);
 } else {
 $jurusan->insert($id, $nama_jurusan);
 }
 header("Location: index_jurusan.php");
 exit;
}
// Hapus
if (isset($_GET['hapus'])) {
 $jurusan->delete($_GET['hapus']);
 header("Location: index_jurusan.php");
 exit;
}
?>