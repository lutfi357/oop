<?php
require_once 'db.php';
class mahasiswa {
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    // Fungsi untuk mendapatkan semua data mahasiswa
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM mahasiswa");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Fungsi untuk mendapatkan data mahasiswa berdasarkan ID
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM mahasiswa WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Fungsi untuk insert data mahasiswa
    // Hapus $id karena id auto_increment
    public function insert($nama, $nim, $jurusan_id) {
        $stmt = $this->db->prepare("INSERT INTO mahasiswa (nama, nim, jurusan_id) VALUES (?, ?, ?)");
        return $stmt->execute([$nama, $nim, $jurusan_id]);
    }

    // Fungsi untuk update data mahasiswa
    public function update($id, $nama, $nim, $jurusan_id) {
        $stmt = $this->db->prepare("UPDATE mahasiswa SET nama = ?, nim = ?, jurusan_id = ? WHERE id = ?");
        return $stmt->execute([$nama, $nim, $jurusan_id, $id]);
    }

    // Fungsi untuk delete data mahasiswa
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM mahasiswa WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
