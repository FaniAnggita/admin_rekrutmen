<?php

require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the POST request
    $idPelamar = $_POST['id_pelamar'];
    // Assuming $_POST['tanggal_psikotest'] is the value from the POST request
    $tanggalPsikotest = $_POST['tanggal_psikotest'];
    if ($tanggalPsikotest === '') {
        $tanggalPsikotest = date('Y-m-d');
    }

    $konfirmasiKehadiran = $_POST['konfirmasi_kehadiran'];
    $ratingPsikotest = $_POST['rating_psikotest'];
    $pengumumanPsikotest = $_POST['pengumuman_psikotest'];
    // Additional fields

    $jamPsikotest = !empty($_POST['jam_psikotest']) ? $_POST['jam_psikotest'] : '00:00:00';
    $keteranganPsikotest = $_POST['keterangan_psikotest'];

    // Check if the id_pelamar already exists in the database
    $checkSql = "SELECT * FROM seleksi_psikotest WHERE id_pelamar = '$idPelamar'";
    $result = $conn->query($checkSql);

    if ($result->num_rows > 0) {
        // Perform an UPDATE operation if the id_pelamar exists
        $updateSql = "UPDATE seleksi_psikotest
                      SET tanggalPsikotest = '$tanggalPsikotest',
                          konfirmasiKehadiran = '$konfirmasiKehadiran',
                          rating_psikotest = '$ratingPsikotest',
                          pengumuman_psikotest = '$pengumumanPsikotest',
                          jam_psikotest = '$jamPsikotest',
                          keterangan_psikotest = '$keteranganPsikotest'
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
        $insertSql = "INSERT INTO seleksi_psikotest (id_pelamar, tanggalPsikotest, konfirmasiKehadiran, rating_psikotest, pengumuman_psikotest, jam_psikotest, keterangan_psikotest)
                      VALUES ('$idPelamar', '$tanggalPsikotest', '$konfirmasiKehadiran', '$ratingPsikotest', '$pengumumanPsikotest', '$jamPsikotest', '$keteranganPsikotest')";

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