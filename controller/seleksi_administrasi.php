<?php
require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the form
    $selectedIdsString = $_POST['selectedIdsInput'];

    // Convert the selected IDs string to an array
    $selectedIds = explode(',', $selectedIdsString);

    // Iterate through the selected IDs and update data
    foreach ($selectedIds as $id) {
        // Sanitize and validate the ID
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if ($id !== false && $id > 0) {
            // Prepare and execute the update query
            $updateSql = "UPDATE seleksi_administrasi SET";

            $updateSql .= isset($_POST['nilai_cv']) && $_POST['nilai_cv'] !== '' ? " nilai_cv = '{$_POST['nilai_cv']}'," : '';
            $updateSql .= isset($_POST['nilai_kualifikasi']) && $_POST['nilai_kualifikasi'] !== '' ? " nilai_kualifikasi = '{$_POST['nilai_kualifikasi']}'," : '';
            $updateSql .= isset($_POST['nilai_pengalaman']) && $_POST['nilai_pengalaman'] !== '' ? " nilai_pengalaman = '{$_POST['nilai_pengalaman']}'," : '';
            $updateSql .= isset($_POST['keterangan']) && $_POST['keterangan'] !== '' ? " keterangan_adm = '{$_POST['keterangan']}'," : '';
            $updateSql .= isset($_POST['hasil_seleksi_adm']) && $_POST['hasil_seleksi_adm'] !== '' ? " hasil_seleksi_adm = '{$_POST['hasil_seleksi_adm']}'," : '';

            // Remove trailing comma
            $updateSql = rtrim($updateSql, ',');

            $updateSql .= " WHERE id_pelamar = '$id'";

            if ($conn->query($updateSql) === TRUE) {
                // Success
                echo ('Data updated successfully');
            } else {
                // Error
                echo ('Error updating data: ' . $conn->error);
            }
        } else {
            // Invalid ID
            echo ('Invalid ID');
        }
    }

    // Close the database connection
    $conn->close();
} else {
    // Return an error if the request method is not POST
    echo ('Invalid request method');
}
?>