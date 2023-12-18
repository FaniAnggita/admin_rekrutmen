<?php
require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Assuming you have a database connection in $conn

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents('php://input'), true);

    // Extract data
    $kode_ps = $data['kode_ps'];
    $penempatan = $data['penempatan'];
    $tenggat_daftar = $data['tenggat_daftar'];
    $deskripsi = $data['deskripsi'];
    $kualifikasi = $data['kualifikasi'];
    $status = $data['status'];

    // Prepare and execute SQL query to insert all data into the database
    $sql = "INSERT INTO lowongan_baru (kode_ps, penempatan, tenggat_daftar, deskripsi, kualifikasi, status) 
            VALUES ('$kode_ps', '$penempatan', '$tenggat_daftar', '$deskripsi', '$kualifikasi', '$status')";

    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
        http_response_code(200); // Send success status
    } else {
        // Error occurred while inserting data
        http_response_code(500); // Send server error status
    }
}
