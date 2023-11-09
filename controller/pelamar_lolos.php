<?php
require_once '../koneksi/koneksi.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_pelamar = $_POST['id_pelamar'];
    $onboard = $_POST['onboard'];
    $spkwt = $_POST['spkwt'];
    $hasil_akhir = $_POST['hasil_akhir'];
    $keterangan_akhir = $_POST['keterangan_akhir'];
    $alasan_tidak_lolos = $_POST['alasan_tidak_lolos'];


    // Check if a record with the same id_pelamar exists
    $check_sql = "SELECT id_hasil_akhir FROM pelamar_lolos WHERE id_pelamar = '$id_pelamar'";
    $result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($result) > 0) {
        // Update the existing record
        $update_sql = "UPDATE pelamar_lolos SET onboard = '$onboard', spkwt = '$spkwt', hasil_akhir = '$hasil_akhir', keterangan_akhir = '$keterangan_akhir',alasan_tidak_lolos = '$alasan_tidak_lolos' WHERE id_pelamar = '$id_pelamar'";

        if (mysqli_query($conn, $update_sql)) {
            echo "Data updated successfully";
        } else {
            echo "Error updating data: " . mysqli_error($conn);
        }
    } else {
        // Insert a new record
        $insert_sql = "INSERT INTO pelamar_lolos (id_pelamar, onboard, spkwt, hasil_akhir, keterangan_akhir, alasan_tidak_lolos) VALUES ('$id_pelamar', '$onboard', '$spkwt', '$hasil_akhir', '$keterangan_akhir', '$alasan_tidak_lolos')";

        if (mysqli_query($conn, $insert_sql)) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
