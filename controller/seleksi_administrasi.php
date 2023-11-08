<?php
require_once '../koneksi/koneksi.php';

// // Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_pelamar = $_POST['id_pelamar'];
    $tanggal_seleksi = $_POST['tanggalseleksi'];
    $nilai_cv = $_POST['nilaiCv'];
    $nilai_kualifikasi = $_POST['nilaiKualifikasi'];
    $nilai_pengalaman = $_POST['nilaiPengalaman'];
    $hasil = $_POST['hasil'];
    $keterangan = $_POST['keterangan'];

    // Check if a record with the same id_pelamar exists
    $check_sql = "SELECT id_administrasi FROM seleksi_administrasi WHERE id_pelamar = '$id_pelamar'";
    $result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($result) > 0) {
        // Update the existing record
        $update_sql = "UPDATE seleksi_administrasi SET tanggal_seleksi = '$tanggal_seleksi', nilai_cv = '$nilai_cv', nilai_kualifikasi = '$nilai_kualifikasi', nilai_pengalaman = '$nilai_pengalaman', hasil_seleksi_adm = '$hasil', keterangan_adm = '$keterangan' WHERE id_pelamar = '$id_pelamar'";

        if (mysqli_query($conn, $update_sql)) {
            echo "Data updated successfully";
        } else {
            echo "Error updating data: " . mysqli_error($conn);
        }
    } else {
        // Insert a new record
        $insert_sql = "INSERT INTO seleksi_administrasi (id_pelamar, tanggal_seleksi, nilai_cv, nilai_kualifikasi, nilai_pengalaman, hasil_seleksi_adm, keterangan_adm) VALUES ('$id_pelamar', '$tanggal_seleksi', '$nilai_cv', '$nilai_kualifikasi', '$nilai_pengalaman', '$hasil', '$keterangan')";

        if (mysqli_query($conn, $insert_sql)) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
