<?php
require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form is submitted
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the form
    $selectedIdsString = $_POST['selectedIdsInputWii'];

    // Convert the selected IDs string to an array
    $selectedIds = explode(',', $selectedIdsString);

    // Iterate through the selected IDs and update or insert data
    foreach($selectedIds as $id) {
        // Sanitize and validate the ID
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id !== false && $id > 0) {
            // Check if id_pelamar already exists in seleksi_wii
            $checkSql = "SELECT COUNT(*) as count FROM seleksi_wii WHERE id_pelamar = '$id'";
            $result = $conn->query($checkSql);

            if($result !== false) {
                $row = $result->fetch_assoc();
                $count = $row['count'];

                // Extract data from the form
                $waktuInterview = isset($_POST['waktuInterview']) ? $_POST['waktuInterview'] : '';
                $konfirmasiKehadiran = isset($_POST['konfirmasiKehadiran']) ? $_POST['konfirmasiKehadiran'] : '';
                $p = isset($_POST['p']) ? $_POST['p'] : '';
                $a = isset($_POST['a']) ? $_POST['a'] : '';
                $k = isset($_POST['k']) ? $_POST['k'] : '';
                $r = isset($_POST['r']) ? $_POST['r'] : '';
                $akun_platform = isset($_POST['akun_platform']) ? $_POST['akun_platform'] : '';
                $pengumuman = isset($_POST['pengumuman']) ? $_POST['pengumuman'] : '';
                $rating = isset($_POST['rating']) ? $_POST['rating'] : '';

                if($count > 0) {
                    // ID already exists, perform UPDATE
                    $updateSql = "UPDATE seleksi_wii SET
                                  waktuInterview = ".($waktuInterview !== '' ? "'$waktuInterview'" : "NULL").",
                                  konfirmasiKehadiran_wii = ".($konfirmasiKehadiran !== '' ? "'$konfirmasiKehadiran'" : "NULL").",
                                  p = ".($p !== '' ? "'$p'" : "NULL").",
                                  a = ".($a !== '' ? "'$a'" : "NULL").",
                                  k = ".($k !== '' ? "'$k'" : "NULL").",
                                  r = ".($r !== '' ? "'$r'" : "NULL").",
                                  akun_platform = ".($akun_platform !== '' ? "'$akun_platform'" : "NULL").",
                                  rating_wii = ".($rating !== '' ? "'$rating'" : "NULL").",
                                  pengumuman_wii = ".($pengumuman !== '' ? "'$pengumuman'" : "NULL")."
                                  WHERE id_pelamar = '$id'";

                    if($conn->query($updateSql) === TRUE) {
                        // Success
                        echo '<script>';
                        echo 'alert("Data berhasil disimpan");';
                        echo 'window.location.href = "../view/proses_rekrutmen.php";';
                        echo '</script>';
                    } else {
                        // Error
                        echo ('Error updating data: '.$conn->error);
                    }
                } else {
                    // ID does not exist, perform INSERT
                    $insertSql = "INSERT INTO seleksi_wii (id_pelamar, waktuInterview, konfirmasiKehadiran_wii, p, a, k, r, rating_wii, pengumuman_wii, akun_platform)
                                  VALUES ('$id', ".($waktuInterview !== '' ? "'$waktuInterview'" : "NULL").", ".($konfirmasiKehadiran !== '' ? "'$konfirmasiKehadiran'" : "NULL").", ".($p !== '' ? "'$p'" : "NULL").", ".($a !== '' ? "'$a'" : "NULL").", ".($k !== '' ? "'$k'" : "NULL").", ".($r !== '' ? "'$r'" : "NULL").", ".($rating !== '' ? "'$rating'" : "NULL").", ".($pengumuman !== '' ? "'$pengumuman'" : "NULL").", ".($akun_platform !== '' ? "'$akun_platform'" : "NULL").")";

                    if($conn->query($insertSql) === TRUE) {
                        // Success
                        echo '<script>';
                        echo 'alert("Data berhasil disimpan");';
                        echo 'window.location.href = "../view/proses_rekrutmen.php";';
                        echo '</script>';
                    } else {
                        // Error
                        echo ('Error inserting data: '.$conn->error);
                    }
                }
            } else {
                // Error in query
                echo ('Error checking ID: '.$conn->error);
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