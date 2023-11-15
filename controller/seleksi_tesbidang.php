<?php
require_once '../koneksi/koneksi.php';
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_pelamar = $_POST['id_pelamar'];
    $tanggalTesBidang = $_POST['tanggalTesBidang'];
    $nilaiTesBidang1 = $_POST['nilaiTesBidang1'];
    $korektor1 = $_POST['korektor1'];
    $nilaiTesBidang2 = $_POST['nilaiTesBidang2'];
    $korektor2 = $_POST['korektor2'];
    $hasil = $_POST['hasil'];
    $pengumuman = $_POST['pengumuman'];
    $keterangan = $_POST['keterangan'];

    // Check if a record with the same id_pelamar exists
    $check_sql = "SELECT id_tesbidang FROM seleksi_tesbidang WHERE id_pelamar = '$id_pelamar'";
    $result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($result) > 0) {
        // Update the existing record
        $update_sql = "UPDATE seleksi_tesbidang SET tanggalTesBidang = '$tanggalTesBidang', nilaiTesBidang1 = '$nilaiTesBidang1', korektor1 = '$korektor1', nilaiTesBidang2 = '$nilaiTesBidang2', korektor2 = '$korektor2', hasil_tb = '$hasil', pengumuman_tb = '$pengumuman', keterangan_tb = '$keterangan' WHERE id_pelamar = '$id_pelamar'";

        if (mysqli_query($conn, $update_sql)) {
            echo "Data updated successfully";
        } else {
            echo "Error updating data: " . mysqli_error($conn);
        }
    } else {
        // Insert a new record
        $insert_sql = "INSERT INTO seleksi_tesbidang (id_pelamar, tanggalTesBidang, nilaiTesBidang1, korektor1, nilaiTesBidang2, korektor2, hasil_tb, pengumuman_tb, keterangan_tb) VALUES ('$id_pelamar', '$tanggalTesBidang', '$nilaiTesBidang1', '$korektor1', '$nilaiTesBidang2', '$korektor2', '$hasil', '$pengumuman', '$keterangan')";

        if (mysqli_query($conn, $insert_sql)) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
