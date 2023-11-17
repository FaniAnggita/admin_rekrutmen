<?php
require_once '../koneksi/koneksi.php';

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Split the "selectedIdsInput" string into an array
$selectedIdsArray = explode(", ", $_POST["selectedIdsInput"]);

foreach ($selectedIdsArray as $id_pelamar) {
    // Sanitize input data
    $id_pelamar = mysqli_real_escape_string($conn, $id_pelamar);
    $tanggal_seleksi = isset($_POST['tanggalseleksi']) ? mysqli_real_escape_string($conn, $_POST['tanggalseleksi']) : '';
    $nilai_cv = isset($_POST['nilaiCv']) ? mysqli_real_escape_string($conn, $_POST['nilaiCv']) : '';
    $nilai_kualifikasi = isset($_POST['nilaiKualifikasi']) ? mysqli_real_escape_string($conn, $_POST['nilaiKualifikasi']) : '';
    $nilai_pengalaman = isset($_POST['nilaiPengalaman']) ? mysqli_real_escape_string($conn, $_POST['nilaiPengalaman']) : '';
    $hasil = isset($_POST['hasil']) ? mysqli_real_escape_string($conn, $_POST['hasil']) : '';
    $keterangan = isset($_POST['keterangan']) ? mysqli_real_escape_string($conn, $_POST['keterangan']) : '';

    // Check if a record with the same id_pelamar exists
    $check_sql = "SELECT id_administrasi FROM seleksi_administrasi WHERE id_pelamar = '$id_pelamar'";
    $check_result = mysqli_query($conn, $check_sql);

    if (!$check_result) {
        die("Error checking existing record: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($check_result) > 0) {
        // Update the existing record if there are fields to update
        $update_fields = [];
        if (!empty($tanggal_seleksi))
            $update_fields[] = "tanggal_seleksi = '$tanggal_seleksi'";
        if (!empty($nilai_cv))
            $update_fields[] = "nilai_cv = '$nilai_cv'";
        if (!empty($nilai_kualifikasi))
            $update_fields[] = "nilai_kualifikasi = '$nilai_kualifikasi'";
        if (!empty($nilai_pengalaman))
            $update_fields[] = "nilai_pengalaman = '$nilai_pengalaman'";
        if (!empty($hasil))
            $update_fields[] = "hasil_seleksi_adm = '$hasil'";
        if (!empty($keterangan))
            $update_fields[] = "keterangan_adm = '$keterangan'";

        if (!empty($update_fields)) {
            $update_sql = "UPDATE seleksi_administrasi SET " . implode(", ", $update_fields) . " WHERE id_pelamar = '$id_pelamar'";

            echo "Update Query: " . $update_sql . "\n"; // Debugging line

            $update_result = mysqli_query($conn, $update_sql);

            if (!$update_result) {
                die("Error updating data for ID $id_pelamar: " . mysqli_error($conn) . "\n");
            }

            echo "Data for ID $id_pelamar updated successfully\n";
        } else {
            echo "No fields to update for ID $id_pelamar\n";
        }
    } else {
        // Insert a new record if there are values to insert
        if (!empty($tanggal_seleksi) || !empty($nilai_cv) || !empty($nilai_kualifikasi) || !empty($nilai_pengalaman) || !empty($hasil) || !empty($keterangan)) {
            $insert_sql = "INSERT INTO seleksi_administrasi (id_pelamar, tanggal_seleksi, nilai_cv, nilai_kualifikasi, nilai_pengalaman, hasil_seleksi_adm, keterangan_adm) VALUES ('$id_pelamar', '$tanggal_seleksi', '$nilai_cv', '$nilai_kualifikasi', '$nilai_pengalaman', '$hasil', '$keterangan')";

            echo "Insert Query: " . $insert_sql . "\n"; // Debugging line

            $insert_result = mysqli_query($conn, $insert_sql);

            if (!$insert_result) {
                die("Error inserting data for ID $id_pelamar: " . mysqli_error($conn) . "\n");
            }

            echo "Data for ID $id_pelamar inserted successfully\n";
        } else {
            echo "No values to insert for ID $id_pelamar\n";
        }
    }
}

// Close the database connection
mysqli_close($conn);
exit;
?>