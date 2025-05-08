<?php
require_once 'db.php';

class nilai {
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    // Fungsi untuk mendapatkan semua data mahasiswa
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM nilai");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Fungsi untuk mendapatkan data mahasiswa berdasarkan ID
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM nilai WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Fungsi untuk insert data mahasiswa
    // Hapus $id karena id auto_increment
    public function insert($mahasiswa_id, $mata_kuliah_id, $nilai) {
        $stmt = $this->db->prepare("INSERT INTO nilai (mahasiswa_id, mata_kuliah_id, nilai) VALUES (?, ?, ?)");
        return $stmt->execute([$mahasiswa_id, $mata_kuliah_id, $nilai]);
    }

    // Fungsi untuk update data mahasiswa
    public function update($id, $mahasiswa_id, $mata_kuliah_id, $nilai) {
        $stmt = $this->db->prepare("UPDATE nilai SET mahasiswa_id = ?, mata_kuliah_id = ?, nilai = ? WHERE id = ?");
        return $stmt->execute([$mahasiswa_id, $mata_kuliah_id, $nilai, $id]);
    }

    // Fungsi untuk delete data mahasiswa
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM nilai WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
