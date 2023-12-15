<?php

require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the POST request
    $idPelamar = $_POST['id_pelamar'];

    $tanggalTesBidang = $_POST['tanggal_tes_bidang'];
    if ($tanggalTesBidang === '') {
        $tanggalTesBidang = date('Y-m-d');
    }
    $konfirmasi_kehadiran_tb = $_POST['konfirmasi_kehadiran_tb'];
    $nilaiTesBidang1 = $_POST['nilai_tb1'];
    $korektor1 = $_POST['korektor1'];
    $nilaiTesBidang2 = $_POST['nilai_tb2'];
    $korektor2 = $_POST['korektor2'];
    $hasilTesBidang = $_POST['hasil'];
    $pengumumanTesBidang = $_POST['pengumuman'];
    $keteranganTesBidang = $_POST['keterangan'];
    // Additional field
    $jam_tb = $_POST['jam_tes_bidang'];

    // Check if the id_pelamar already exists in the database
    $checkSql = "SELECT * FROM seleksi_tesbidang WHERE id_pelamar = '$idPelamar'";
    $result = $conn->query($checkSql);

    if ($result->num_rows > 0) {
        // Perform an UPDATE operation if the id_pelamar exists
        $updateSql = "UPDATE seleksi_tesbidang
                      SET tanggalTesBidang = '$tanggalTesBidang',
                          konfirmasi_kehadiran_tb = '$konfirmasi_kehadiran_tb',
                          nilaiTesBidang1 = '$nilaiTesBidang1',
                          korektor1 = '$korektor1',
                          nilaiTesBidang2 = '$nilaiTesBidang2',
                          korektor2 = '$korektor2',
                          hasil_tb = '$hasilTesBidang',
                          pengumuman_tb = '$pengumumanTesBidang',
                          keterangan_tb = '$keteranganTesBidang',
                          jam_tb = '$jam_tb'
                      WHERE id_pelamar = '$idPelamar'";

        if ($conn->query($updateSql) === TRUE) {
            // Return a success message
            echo json_encode(['status' => 'success', 'message' => 'Data updated successfully']);
        } else {
            // Return an error message for update operation
            echo json_encode(['status' => 'error', 'message' => 'Error updating data: ' . $conn->error]);
        }
    } else {
        // Perform an INSERT operation if the id_pelamar does not exist
        $insertSql = "INSERT INTO seleksi_tesbidang (id_pelamar, tanggalTesBidang, nilaiTesBidang1, korektor1, nilaiTesBidang2, korektor2, hasil_tb, pengumuman_tb, keterangan_tb, jam_tb)
                      VALUES ('$idPelamar', '$tanggalTesBidang', '$nilaiTesBidang1', '$korektor1', '$nilaiTesBidang2', '$korektor2', '$hasilTesBidang', '$pengumumanTesBidang', '$keteranganTesBidang', '$jam_tb')";

        if ($conn->query($insertSql) === TRUE) {
            // Return a success message
            echo json_encode(['status' => 'success', 'message' => 'Data inserted successfully']);
        } else {
            // Return an error message for insert operation
            echo json_encode(['status' => 'error', 'message' => 'Error inserting data: ' . $conn->error]);
        }
    }

    // Close the database connection
    $conn->close();
} else {
    // Return an error if the request method is not POST
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>