<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "mahasiswa1";
try {
 $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
 die("Koneksi gagal: " . $e->getMessage());
}
?>