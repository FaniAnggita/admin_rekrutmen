<?php
require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the form
    $selectedIdsString = $_POST['selectedIdsInputPsikotest'];

    // Convert the selected IDs string to an array
    $selectedIds = explode(',', $selectedIdsString);

    // Iterate through the selected IDs and update or insert data
    foreach ($selectedIds as $id) {
        // Sanitize and validate the ID
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if ($id !== false && $id > 0) {
            // Check if id_pelamar already exists in seleksi_psikotest
            $checkSql = "SELECT COUNT(*) as count FROM seleksi_psikotest WHERE id_pelamar = '$id'";
            $result = $conn->query($checkSql);

            if ($result !== false) {
                $row = $result->fetch_assoc();
                $count = $row['count'];

                // Extract data from the form
                $tanggalPsikotest = $_POST['tanggalPsikotest'];
                $konfirmasiKehadiran = $_POST['konfirmasiKehadiran'];
                $keterangan = $_POST['keterangan'];
                $rating = $_POST['rating'];
                $pengumuman = $_POST['pengumuman'];

                if ($count > 0) {
                    // ID already exists, perform UPDATE
                    $updateSql = "UPDATE seleksi_psikotest SET";

                    $updateSql .= isset($_POST['tanggalPsikotest']) && $_POST['tanggalPsikotest'] !== '' ? " tanggalPsikotest = '$tanggalPsikotest'," : '';
                    $updateSql .= isset($_POST['konfirmasiKehadiran']) && $_POST['konfirmasiKehadiran'] !== '' ? " konfirmasiKehadiran = '$konfirmasiKehadiran'," : '';
                    $updateSql .= isset($_POST['keterangan']) && $_POST['keterangan'] !== '' ? " keterangan = '$keterangan'," : '';
                    $updateSql .= isset($_POST['rating']) && $_POST['rating'] !== '' ? " rating_psikotest = '$rating'," : '';
                    $updateSql .= isset($_POST['pengumuman']) && $_POST['pengumuman'] !== '' ? " pengumuman_psikotest = '$pengumuman'," : '';

                    // Remove trailing comma
                    $updateSql = rtrim($updateSql, ',');

                    $updateSql .= " WHERE id_pelamar = '$id'";

                    if ($conn->query($updateSql) === TRUE) {
                        // Success
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
                    $insertSql = "INSERT INTO seleksi_psikotest (id_pelamar, tanggalPsikotest, konfirmasiKehadiran, keterangan, rating_psikotest, pengumuman_psikotest)
                                  VALUES ('$id', '$tanggalPsikotest', '$konfirmasiKehadiran', '$keterangan', '$rating', '$pengumuman')";

                    if ($conn->query($insertSql) === TRUE) {
                        // Success
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