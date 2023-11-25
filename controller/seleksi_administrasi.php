<?php
require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
var_dump($_POST);
exit;
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the form
    $selectedIdsString = $_POST['selectedIds'];

    // Convert the selected IDs string to an array
    $selectedIds = explode(',', $selectedIdsString);

    // Iterate through the selected IDs and update data
    foreach ($selectedIds as $id) {
        // Sanitize and validate the ID
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if ($id !== false && $id > 0) {
            // Assuming the form fields have names like 'nilai_cv', 'nilai_kualifikasi', etc.

            $nilai_cv = $_POST['nilai_cv'];
            $nilai_kualifikasi = $_POST['nilai_kualifikasi'];
            $nilai_pengalaman = $_POST['nilai_pengalaman'];
            $keterangan = $_POST['keterangan'];
            $hasil_seleksi_adm = $_POST['hasil_seleksi_adm'];

            // Prepare and execute the update query
            $updateSql = "UPDATE seleksi_administrasi
                          SET nilai_cv = '$nilai_cv',
                              nilai_kualifikasi = '$nilai_kualifikasi',
                              nilai_pengalaman = '$nilai_pengalaman',
                              hasil_seleksi_adm = '$hasil_seleksi_adm',
                              keterangan_adm = '$keterangan',
                            
                          WHERE id_pelamar = '$id'";

            if ($conn->query($updateSql) === TRUE) {
                // Success
                echo json_encode(['status' => 'success', 'message' => 'Data updated successfully']);
            } else {
                // Error
                echo json_encode(['status' => 'error', 'message' => 'Error updating data: ' . $conn->error]);
            }
        } else {
            // Invalid ID
            echo json_encode(['status' => 'error', 'message' => 'Invalid ID']);
        }
    }

    // Close the database connection
    $conn->close();
} else {
    // Return an error if the request method is not POST
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>