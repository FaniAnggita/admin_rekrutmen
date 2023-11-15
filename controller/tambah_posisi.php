<?php
require_once '../koneksi/koneksi.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kode_ps = $_POST['kode_ps'];
    $nama_ps = $_POST['nama_ps'];
    $max_usia = $_POST['max_usia'];

    // Check if a record with the same nik exists
    $check_sql = "SELECT kode_ps FROM posisi WHERE kode_ps = '$kode_ps'";
    $result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Kode posisi telah digunakan!";
    } else {
        // Insert a new record
        $insert_sql = "INSERT INTO posisi (kode_ps, nama_ps, max_usia) VALUES ('$kode_ps', '$nama_ps', '$max_usia')";

        if (mysqli_query($conn, $insert_sql)) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
