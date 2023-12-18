<?php
require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents('php://input'), true);

    // Extract data
    $id_lowongan = $data['id_lowongan'];
    $kode_ps = $data['kode_ps'];
    $penempatan = $data['penempatan'];
    $tenggat_daftar = $data['tenggat_daftar'];
    $deskripsi = $data['deskripsi'];
    $kualifikasi = $data['kualifikasi'];
    $status = $data['status'];

    // Perform update operation
    $sql = "UPDATE lowongan_baru 
            SET kode_ps = '$kode_ps', penempatan = '$penempatan', tenggat_daftar = '$tenggat_daftar', 
                deskripsi = '$deskripsi', kualifikasi = '$kualifikasi', status = '$status' 
            WHERE id_lowongan = '$id_lowongan'";

    if ($conn->query($sql) === TRUE) {
        // Data updated successfully
        http_response_code(200); // Send success status
    } else {
        // Error occurred while updating data
        http_response_code(500); // Send server error status
    }
}
?>