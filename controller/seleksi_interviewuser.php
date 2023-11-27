<?php
require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the form
    $selectedIdsString = $_POST['selectedIdsInputInterviewUser'];

    // Convert the selected IDs string to an array
    $selectedIds = explode(',', $selectedIdsString);

    // Iterate through the selected IDs and update or insert data
    foreach ($selectedIds as $id) {
        // Sanitize and validate the ID
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if ($id !== false && $id > 0) {
            // Check if id_pelamar already exists in seleksi_interviewuser
            $checkSql = "SELECT COUNT(*) as count FROM seleksi_interviewuser WHERE id_pelamar = '$id'";
            $result = $conn->query($checkSql);

            if ($result !== false) {
                $row = $result->fetch_assoc();
                $count = $row['count'];

                // Extract data from the form
                $tanggalInterviewUser = $_POST['tanggalIntUser'];
                $konfirmasiKehadiran = $_POST['konfirmasiKehadiran'];
                $dt = $_POST['dt'];
                $ka = $_POST['ka'];
                $pm = $_POST['pm'];
                $pd = $_POST['pd'];
                $bd = $_POST['bd'];
                $ktb = $_POST['ktb'];
                $pengumuman = $_POST['pengumuman'];
                $keterangan = $_POST['keterangan'];
                $hasil = $_POST['hasil'];

                if ($count > 0) {
                    // ID already exists, perform UPDATE
                    $updateSql = "UPDATE seleksi_interviewuser SET";

                    $updateSql .= isset($_POST['tanggalIntUser']) && $_POST['tanggalIntUser'] !== '' ? " tanggalInterviewUser = '$tanggalInterviewUser'," : '';
                    $updateSql .= isset($_POST['konfirmasiKehadiran']) && $_POST['konfirmasiKehadiran'] !== '' ? " konfirmasiKehadiran_iu = '$konfirmasiKehadiran'," : '';
                    $updateSql .= isset($_POST['dt']) && $_POST['dt'] !== '' ? " dt = '$dt'," : '';
                    $updateSql .= isset($_POST['ka']) && $_POST['ka'] !== '' ? " ka = '$ka'," : '';
                    $updateSql .= isset($_POST['pm']) && $_POST['pm'] !== '' ? " pm = '$pm'," : '';
                    $updateSql .= isset($_POST['pd']) && $_POST['pd'] !== '' ? " pd = '$pd'," : '';
                    $updateSql .= isset($_POST['bd']) && $_POST['bd'] !== '' ? " bd = '$bd'," : '';
                    $updateSql .= isset($_POST['ktb']) && $_POST['ktb'] !== '' ? " ktb = '$ktb'," : '';
                    $updateSql .= isset($_POST['pengumuman']) && $_POST['pengumuman'] !== '' ? " hasil_iu = '$hasil'," : '';
                    $updateSql .= isset($_POST['pengumuman']) && $_POST['pengumuman'] !== '' ? " pengumuman_iu = '$pengumuman'," : '';
                    $updateSql .= isset($_POST['keterangan']) && $_POST['keterangan'] !== '' ? " keterangan_iu = '$keterangan'," : '';

                    // Remove trailing comma
                    $updateSql = rtrim($updateSql, ',');

                    $updateSql .= " WHERE id_pelamar = '$id'";

                    if ($conn->query($updateSql) === TRUE) {
                        // Success
                        echo ('Data updated successfully');
                    } else {
                        // Error
                        echo ('Error updating data: ' . $conn->error);
                    }
                } else {
                    // ID does not exist, perform INSERT
                    $insertSql = "INSERT INTO seleksi_interviewuser (id_pelamar, tanggalInterviewUser, konfirmasiKehadiran_iu, dt, ka, pm, pd, bd, ktb, hasil_iu, pengumuman_iu, keterangan_iu)
                                  VALUES ('$id', '$tanggalInterviewUser', '$konfirmasiKehadiran', '$dt', '$ka', '$pm', '$pd', '$bd', '$ktb', '$hasil', '$pengumuman', '$keterangan')";

                    if ($conn->query($insertSql) === TRUE) {
                        // Success
                        echo ('Data inserted successfully');
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