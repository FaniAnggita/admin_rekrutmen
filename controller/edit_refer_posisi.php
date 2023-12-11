<?php

require_once '../koneksi/koneksi.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the POST request
    $idPelamar = $_POST['id_pelamar'];
    $refer_posisi = $_POST['refer_posisi'];


    $updateSql = "UPDATE pelamar2
                      SET 
                          refer_posisi = '$refer_posisi'
                      WHERE kode_pelamar = '$idPelamar'";

    if ($conn->query($updateSql) === TRUE) {
        // Return a success message
        echo json_encode(['status' => 'success', 'message' => 'Data updated successfully']);
    } else {
        // Return an error message for update operation
        echo json_encode(['status' => 'error', 'message' => 'Error updating data: ' . $conn->error]);
    }

    // Close the database connection
    $conn->close();
}