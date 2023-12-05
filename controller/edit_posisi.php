<?php
require_once '../koneksi/koneksi.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_posisi = $_POST['id_ps'];
    $kode_ps = $_POST['kode_ps'];
    $nama_ps = $_POST['nama_ps'];
    $max_usia = $_POST['max_usia'];
    $jumlah_pelamar = $_POST['jumlah_pelamar'];
    $status_posisi = $_POST['status_posisi'];

    // Perform update if id_posisi is provided
    if (!empty($id_posisi)) {
        $update_sql = "UPDATE posisi 
                       SET kode_ps = '$kode_ps', nama_ps = '$nama_ps', 
                           max_usia = '$max_usia', jumlah_pelamar = '$jumlah_pelamar', 
                           status_posisi = '$status_posisi'
                       WHERE id_ps = '$id_posisi'";

        if (mysqli_query($conn, $update_sql)) {
            echo "Data updated successfully";
        } else {
            echo "Error updating data: " . mysqli_error($conn);
        }
    } else {
        echo "ID posisi not provided. Update operation requires an ID.";
    }
}

// Close the database connection
mysqli_close($conn);
?>