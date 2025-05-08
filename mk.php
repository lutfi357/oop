<?php
require_once 'db.php';
class mata_kuliah {
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM mata_kuliah");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM mata_kuliah WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($id, $nama_mk, $sks) {
        $stmt = $this->db->prepare("INSERT INTO mata_kuliah (id,nama_mk, sks) VALUES (?, ?, ?)");
        return $stmt->execute([$id, $nama_mk, $sks]);
    }

    // Fungsi untuk update data mahasiswa
    public function update($id, $nama_mk, $sks) {
        $stmt = $this->db->prepare("UPDATE mata_kuliah SET id = ?, nama_mk = ?, sks = ? WHERE id = ?");
        return $stmt->execute([$id, $nama_mk, $sks]);
    }

    // Fungsi untuk delete data mahasiswa
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM mata_kuliah WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
