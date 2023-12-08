<?php
require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the form
    $selectedIdsString = $_POST['selectedIdsInputTesBidang'];

    // Convert the selected IDs string to an array
    $selectedIds = explode(',', $selectedIdsString);

    // Iterate through the selected IDs and update or insert data
    foreach ($selectedIds as $id) {
        // Sanitize and validate the ID
        $id = filter_var($id, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if ($id !== false && $id > 0) {
            // Check if id_pelamar already exists in seleksi_tesbidang
            $checkSql = "SELECT COUNT(*) as count FROM seleksi_tesbidang WHERE id_pelamar = '$id'";
            $result = $conn->query($checkSql);

            if ($result !== false) {
                $row = $result->fetch_assoc();
                $count = $row['count'];

                // Extract data from the form
                $tanggalTesBidang = $_POST['tanggalTesBidang'];
                $konfirmasiKehadiran = $_POST['pengumuman']; // Assuming konfirmasi_kehadiran_tb is related to pengumuman
                $nilaiTesBidang1 = $_POST['nilaiTesBidang1'];
                $korektor1 = $_POST['korektor1'];
                $nilaiTesBidang2 = $_POST['nilaiTesBidang2'];
                $korektor2 = $_POST['korektor2'];
                $pengumuman = $_POST['pengumuman'];
                $keterangan = $_POST['keterangan'];
                $hasil = $_POST['hasil'];

                if ($count > 0) {
                    // ID already exists, perform UPDATE
                    $updateSql = "UPDATE seleksi_tesbidang SET";

                    $updateSql .= isset($_POST['tanggalTesBidang']) && $_POST['tanggalTesBidang'] !== '' ? " tanggalTesBidang = '$tanggalTesBidang'," : '';
                    $updateSql .= isset($_POST['pengumuman']) && $_POST['pengumuman'] !== '' ? " konfirmasi_kehadiran_tb = '$konfirmasiKehadiran'," : '';
                    $updateSql .= isset($_POST['nilaiTesBidang1']) && $_POST['nilaiTesBidang1'] !== '' ? " nilaiTesBidang1 = '$nilaiTesBidang1'," : '';
                    $updateSql .= isset($_POST['korektor1']) && $_POST['korektor1'] !== '' ? " korektor1 = '$korektor1'," : '';
                    $updateSql .= isset($_POST['nilaiTesBidang2']) && $_POST['nilaiTesBidang2'] !== '' ? " nilaiTesBidang2 = '$nilaiTesBidang2'," : '';
                    $updateSql .= isset($_POST['korektor2']) && $_POST['korektor2'] !== '' ? " korektor2 = '$korektor2'," : '';
                    $updateSql .= isset($_POST['pengumuman']) && $_POST['pengumuman'] !== '' ? " hasil_tb = '$hasil'," : '';
                    $updateSql .= isset($_POST['pengumuman']) && $_POST['pengumuman'] !== '' ? " pengumuman_tb = '$pengumuman'," : '';
                    $updateSql .= isset($_POST['keterangan']) && $_POST['keterangan'] !== '' ? " keterangan_tb = '$keterangan'," : '';

                    // Remove trailing comma
                    $updateSql = rtrim($updateSql, ',');

                    $updateSql .= " WHERE id_pelamar = '$id'";

                    if ($conn->query($updateSql) === TRUE) {
                        // Success
                        echo '<script>';
                        echo 'alert("Data berhasil disimpan");';
                        echo 'window.location.href = "../view/proses_rekrutmen.php";';
                        echo '</script>';
                    } else {
                        // Error
                        echo ('Error updating data: ' . $conn->error);
                    }
                } else {
                    // ID does not exist, perform INSERT
                    $insertSql = "INSERT INTO seleksi_tesbidang (id_pelamar, tanggalTesBidang, konfirmasi_kehadiran_tb, nilaiTesBidang1, korektor1, nilaiTesBidang2, korektor2, hasil_tb, pengumuman_tb, keterangan_tb)
                                  VALUES ('$id', '$tanggalTesBidang', '$konfirmasiKehadiran', '$nilaiTesBidang1', '$korektor1', '$nilaiTesBidang2','$korektor2', '$hasil', '$pengumuman', '$keterangan')";

                    if ($conn->query($insertSql) === TRUE) {
                        // Success
                        echo '<script>';
                        echo 'alert("Data berhasil disimpan");';
                        echo 'window.location.href = "../view/proses_rekrutmen.php";';
                        echo '</script>';
                    } else {
                        // Error
                        echo ('Error inserting data: ' . $conn->error);
                    }
                }
            } else {
                // Error in query
                echo ('Error checking ID: ' . $conn->error);
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