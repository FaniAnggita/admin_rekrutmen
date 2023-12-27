<?php
require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents('php://input'), true);

    // Extract data
    $id_int = $data['id_int'];
    $nama_int = $data['nama_int'];


    // Perform update operation
    $sql = "UPDATE interviewer 
            SET nama_int = '$nama_int'
            WHERE id_int = '$id_int'";

    if ($conn->query($sql) === TRUE) {
        // Data updated successfully
        http_response_code(200); // Send success status
    } else {
        // Error occurred while updating data
        http_response_code(500); // Send server error status
    }
}
