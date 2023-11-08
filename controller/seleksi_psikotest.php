<?php
require_once '../koneksi/koneksi.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_pelamar = $_POST['id_pelamar'];
    $tanggalPsikotest = $_POST['tanggalPsikotest'];
    $konfirmasiKehadiran = $_POST['konfirmasiKehadiran'];
    $rating = $_POST['rating'];
    $pengumuman = $_POST['pengumuman'];
    $keterangan = $_POST['keterangan'];

    // Check if a record with the same id_pelamar exists
    $check_sql = "SELECT id_psikotest FROM seleksi_psikotest WHERE id_pelamar = '$id_pelamar'";
    $result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($result) > 0) {
        // Update the existing record
        $update_sql = "UPDATE seleksi_psikotest SET tanggalPsikotest = '$tanggalPsikotest', konfirmasiKehadiran = '$konfirmasiKehadiran', rating_psikotest = '$rating', pengumuman_psikotest = '$pengumuman', keterangan = '$keterangan' WHERE id_pelamar = '$id_pelamar'";

        if (mysqli_query($conn, $update_sql)) {
            echo "Data updated successfully";
        } else {
            echo "Error updating data: " . mysqli_error($conn);
        }
    } else {
        // Insert a new record
        $insert_sql = "INSERT INTO seleksi_psikotest (id_pelamar, tanggalPsikotest, konfirmasiKehadiran, rating_psikotest, pengumuman_psikotest, keterangan) VALUES ('$id_pelamar', '$tanggalPsikotest', '$konfirmasiKehadiran', '$rating', '$pengumuman', '$keterangan')";

        if (mysqli_query($conn, $insert_sql)) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
