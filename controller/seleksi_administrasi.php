<?php
require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form is submitted
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the form
    $selectedIdsString = $_POST['selectedIdsInput'];

    // Convert the selected IDs string to an array
    $selectedIds = explode(',', $selectedIdsString);

    // Iterate through the selected IDs and update or insert data
    foreach($selectedIds as $id) {
        // Sanitize and validate the ID
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id !== false && $id > 0) {
            // Check if id_pelamar already exists in seleksi_administrasi
            $checkSql = "SELECT COUNT(*) as count FROM seleksi_administrasi WHERE kode_pelamar = '$id'";
            $result = $conn->query($checkSql);

            if($result !== false) {
                $row = $result->fetch_assoc();
                $count = $row['count'];

                if($count > 0) {
                    // ID already exists, perform UPDATE
                    $updateSql = "UPDATE seleksi_administrasi SET";
                    $updateSql .= isset($_POST['tanggal_administrasi']) && $_POST['tanggal_administrasi'] !== '' ? " tanggal_administrasi = '{$_POST['tanggal_administrasi']}'," : '';
                    $updateSql .= isset($_POST['nilai_cv']) && $_POST['nilai_cv'] !== '' ? " nilai_cv = '{$_POST['nilai_cv']}'," : '';
                    $updateSql .= isset($_POST['nilai_kualifikasi']) && $_POST['nilai_kualifikasi'] !== '' ? " nilai_kualifikasi = '{$_POST['nilai_kualifikasi']}'," : '';
                    $updateSql .= isset($_POST['nilai_pengalaman']) && $_POST['nilai_pengalaman'] !== '' ? " nilai_pengalaman = '{$_POST['nilai_pengalaman']}'," : '';
                    $updateSql .= isset($_POST['keterangan']) && $_POST['keterangan'] !== '' ? " keterangan_adm = '{$_POST['keterangan']}'," : '';
                    $updateSql .= isset($_POST['hasil_seleksi_adm']) && $_POST['hasil_seleksi_adm'] !== '' ? " hasil_seleksi_adm = '{$_POST['hasil_seleksi_adm']}'," : '';

                    // Remove trailing comma
                    $updateSql = rtrim($updateSql, ',');

                    $updateSql .= " WHERE id_pelamar = '$id'";

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
                    $insertSql = "INSERT INTO seleksi_administrasi (id_pelamar,";

                    if(isset($_POST['nilai_cv']) && $_POST['nilai_cv'] !== '') {
                        $insertSql .= " nilai_cv,";
                    }
                    if(isset($_POST['nilai_kualifikasi']) && $_POST['nilai_kualifikasi'] !== '') {
                        $insertSql .= " nilai_kualifikasi,";
                    }
                    if(isset($_POST['nilai_pengalaman']) && $_POST['nilai_pengalaman'] !== '') {
                        $insertSql .= " nilai_pengalaman,";
                    }
                    if(isset($_POST['keterangan']) && $_POST['keterangan'] !== '') {
                        $insertSql .= " keterangan_adm,";
                    }
                    if(isset($_POST['hasil_seleksi_adm']) && $_POST['hasil_seleksi_adm'] !== '') {
                        $insertSql .= " hasil_seleksi_adm,";
                    }

                    // Remove trailing comma
                    $insertSql = rtrim($insertSql, ',');

                    $insertSql .= ") VALUES ('$id',";

                    if(isset($_POST['nilai_cv']) && $_POST['nilai_cv'] !== '') {
                        $insertSql .= " '{$_POST['nilai_cv']}',";
                    }
                    if(isset($_POST['nilai_kualifikasi']) && $_POST['nilai_kualifikasi'] !== '') {
                        $insertSql .= " '{$_POST['nilai_kualifikasi']}',";
                    }
                    if(isset($_POST['nilai_pengalaman']) && $_POST['nilai_pengalaman'] !== '') {
                        $insertSql .= " '{$_POST['nilai_pengalaman']}',";
                    }
                    if(isset($_POST['keterangan']) && $_POST['keterangan'] !== '') {
                        $insertSql .= " '{$_POST['keterangan']}',";
                    }
                    if(isset($_POST['hasil_seleksi_adm']) && $_POST['hasil_seleksi_adm'] !== '') {
                        $insertSql .= " '{$_POST['hasil_seleksi_adm']}',";
                    }

                    // Remove trailing comma
                    $insertSql = rtrim($insertSql, ',');

                    $insertSql .= ")";

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