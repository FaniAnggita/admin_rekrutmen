<?php

require_once '../koneksi/koneksi.php';

// Check if the request is a POST request
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the POST request
    $idPelamar = $_POST['id_pelamar'];
    $tanggal_administrasi = $_POST['tanggal_administrasi'];
    $nilaiCV = $_POST['nilai_cv'];
    $nilaiKualifikasi = $_POST['nilai_kualifikasi'];
    $nilaiPengalaman = $_POST['nilai_pengalaman'];
    $hasilSeleksiAdm = $_POST['hasil_seleksi_adm'];
    $keteranganAdm = $_POST['keterangan_adm'];

    // Check if the id_pelamar already exists in the database
    $checkSql = "SELECT * FROM seleksi_administrasi WHERE id_pelamar = '$idPelamar'";
    $result = $conn->query($checkSql);

    if($result->num_rows > 0) {
        // Perform an UPDATE operation if the id_pelamar exists
        $updateSql = "UPDATE seleksi_administrasi
                      SET 
                          tanggal_administrasi = '$tanggal_administrasi',
                          nilai_cv = '$nilaiCV',
                          nilai_kualifikasi = '$nilaiKualifikasi',
                          nilai_pengalaman = '$nilaiPengalaman',
                          hasil_seleksi_adm = '$hasilSeleksiAdm',
                          keterangan_adm = '$keteranganAdm'
                      WHERE id_pelamar = '$idPelamar'";

        if($conn->query($updateSql) === TRUE) {
            // Return a success message
            echo json_encode(['status' => 'success', 'message' => 'Data updated successfully']);
        } else {
            // Return an error message for update operation
            echo json_encode(['status' => 'error', 'message' => 'Error updating data: '.$conn->error]);
        }
    } else {
        // Perform an INSERT operation if the id_pelamar does not exist
        $insertSql = "INSERT INTO seleksi_administrasi (id_pelamar,tanggal_administrasi, nilai_cv, nilai_kualifikasi, nilai_pengalaman, hasil_seleksi_adm, keterangan_adm)
                      VALUES ('$idPelamar', '$tanggal_administrasi','$nilaiCV', '$nilaiKualifikasi', '$nilaiPengalaman', '$hasilSeleksiAdm', '$keteranganAdm')";

        if($conn->query($insertSql) === TRUE) {
            // Return a success message
            echo json_encode(['status' => 'success', 'message' => 'Data inserted successfully']);
        } else {
            // Return an error message for insert operation
            echo json_encode(['status' => 'error', 'message' => 'Error inserting data: '.$conn->error]);
        }
    }

    // Close the database connection
    $conn->close();
} else {
    // Return an error if the request method is not POST
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>