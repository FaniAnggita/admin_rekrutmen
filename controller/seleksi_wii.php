<?php
require_once '../koneksi/koneksi.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_pelamar = $_POST['id_pelamar'];
    $waktuInterview = $_POST['waktuInterview'];
    $konfirmasiKehadiran = $_POST['konfirmasiKehadiran'];
    $p = $_POST['p'];
    $a = $_POST['a'];
    $k = $_POST['k'];
    $r = $_POST['r'];
    $rating = $_POST['rating'];
    $pengumuman = $_POST['pengumuman'];
    $id_int = $_POST['id_int'];

    // Check if a record with the same id_pelamar exists
    $check_sql = "SELECT id_wii FROM seleksi_wii WHERE id_pelamar = '$id_pelamar'";
    $result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($result) > 0) {
        // Update the existing record
        $update_sql = "UPDATE seleksi_wii SET waktuInterview = '$waktuInterview', konfirmasiKehadiran_wii = '$konfirmasiKehadiran', p = '$p', a = '$a', k = '$k', r = '$r', rating_wii = '$rating', pengumuman_wii = '$pengumuman', interviewer_wii = '$id_int' WHERE id_pelamar = '$id_pelamar'";

        if (mysqli_query($conn, $update_sql)) {
            echo "Data updated successfully";
        } else {
            echo "Error updating data: " . mysqli_error($conn);
        }
    } else {
        // Insert a new record
        $insert_sql = "INSERT INTO seleksi_wii (id_pelamar, waktuInterview, konfirmasiKehadiran_wii, p, a, k, r, rating_wii, pengumuman_wii, interviewer_wii) VALUES ('$id_pelamar', '$waktuInterview', '$konfirmasiKehadiran', '$p', '$a', '$k', '$r', '$rating', '$pengumuman', '$id_int')";

        if (mysqli_query($conn, $insert_sql)) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
