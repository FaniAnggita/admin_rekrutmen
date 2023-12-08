<?php
require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the form
    $selectedIdsString = $_POST['selectedIdsInputIndepth'];

    // Convert the selected IDs string to an array
    $selectedIds = explode(',', $selectedIdsString);

    // Iterate through the selected IDs and update or insert data
    foreach ($selectedIds as $id) {
        // Sanitize and validate the ID
        $id = filter_var($id, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if ($id !== false && $id > 0) {
            // Check if id_pelamar already exists in seleksi_indepth
            $checkSql = "SELECT COUNT(*) as count FROM seleksi_indepth WHERE id_pelamar = '$id'";
            $result = $conn->query($checkSql);

            if ($result !== false) {
                $row = $result->fetch_assoc();
                $count = $row['count'];

                // Extract data from the form
                $tanggalIndepth = isset($_POST['tanggalIndepth']) ? $_POST['tanggalIndepth'] : '';
                $konfirmasiKehadiran = isset($_POST['konfirmasiKehadiran']) ? $_POST['konfirmasiKehadiran'] : '';
                $KTB = isset($_POST['KTB']) ? $_POST['KTB'] : '';
                $KPR = isset($_POST['KPR']) ? $_POST['KPR'] : '';
                $Siker = isset($_POST['Siker']) ? $_POST['Siker'] : '';
                $pengumuman = isset($_POST['pengumuman']) ? $_POST['pengumuman'] : '';
                $keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : '';
                $interviewer_indepth = isset($_POST['interviewer_indepth']) ? $_POST['interviewer_indepth'] : '';
                $hasil = isset($_POST['hasil']) ? $_POST['hasil'] : '';

                if ($count > 0) {
                    // ID already exists, perform UPDATE
                    $updateSql = "UPDATE seleksi_indepth SET";

                    $updateSql .= !empty($tanggalIndepth) ? " tanggalIndepth = '$tanggalIndepth'," : '';
                    $updateSql .= !empty($konfirmasiKehadiran) ? " konfirmasiKehadiran_in = '$konfirmasiKehadiran'," : '';
                    $updateSql .= !empty($KTB) ? " KTB = '$KTB'," : '';
                    $updateSql .= !empty($KPR) ? " KPR = '$KPR'," : '';
                    $updateSql .= !empty($Siker) ? " Siker = '$Siker'," : '';
                    $updateSql .= !empty($pengumuman) ? " pengumuman_in = '$pengumuman'," : '';
                    $updateSql .= !empty($keterangan) ? " keterangan_in = '$keterangan'," : '';
                    $updateSql .= !empty($interviewer_indepth) ? " interviewerIndepth = '$interviewer_indepth'," : '';
                    $updateSql .= !empty($hasil) ? " hasilIndepth = '$hasil'," : '';

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
                    $insertSql = "INSERT INTO seleksi_indepth (id_pelamar, interviewerIndepth, tanggalIndepth, konfirmasiKehadiran_in, KTB, KPR, Siker, pengumuman_in, keterangan_in, hasilIndepth)
                                  VALUES ('$id', '$interviewer_indepth', '$tanggalIndepth', '$konfirmasiKehadiran', '$KTB', '$KPR', '$Siker', '$pengumuman', '$keterangan', '$hasil')";

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