<?php
require_once '../koneksi/koneksi.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nik = $_POST['nik'];
    $nama_int = $_POST['nama_int'];

    // Check if a record with the same nik exists
    $check_sql = "SELECT nik FROM interviewer WHERE nik = '$nik'";
    $result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Nomor Induk Karyawan (NIK) telah digunakan!";
    } else {
        // Insert a new record
        $insert_sql = "INSERT INTO interviewer (nik, nama_int) VALUES ('$nik', '$nama_int')";

        if (mysqli_query($conn, $insert_sql)) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
