<?php

require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the POST request
    $idPelamar = $_POST['id_pelamar'];

    $tanggalInterviewUser = $_POST['tanggal_interview_user'];
    if ($tanggalInterviewUser === '') {
        $tanggalInterviewUser = date('Y-m-d');
    }
    $konfirmasiKehadiranIu = $_POST['konfirmasi_kehadiran_iu'];
    $dt = $_POST['dt'];
    $ka = $_POST['ka'];
    $pm = $_POST['pm'];
    $pd = $_POST['pd'];
    $bd = $_POST['bd'];
    $ktb = $_POST['ktb'];
    $hasilIu = $_POST['hasil_iu'];
    $pengumumanIu = $_POST['pengumuman_iu'];
    $keteranganIu = $_POST['keterangan_iu'];

    // Check if the id_pelamar already exists in the database
    $checkSql = "SELECT * FROM seleksi_interviewuser WHERE id_pelamar = '$idPelamar'";
    $result = $conn->query($checkSql);

    if ($result->num_rows > 0) {
        // Perform an UPDATE operation if the id_pelamar exists
        $updateSql = "UPDATE seleksi_interviewuser
                      SET tanggalInterviewUser = '$tanggalInterviewUser',
                          konfirmasiKehadiran_iu = '$konfirmasiKehadiranIu',
                          dt = '$dt',
                          ka = '$ka',
                          pm = '$pm',
                          pd = '$pd',
                          bd = '$bd',
                          ktb = '$ktb',
                          hasil_iu = '$hasilIu',
                          pengumuman_iu = '$pengumumanIu',
                          keterangan_iu = '$keteranganIu'
                      WHERE id_pelamar = '$idPelamar'";

        if ($conn->query($updateSql) === TRUE) {
            // Return a success message
            echo json_encode(['status' => 'success', 'message' => 'Data updated successfully']);
        } else {
            // Return an error message for update operation
            echo json_encode(['status' => 'error', 'message' => 'Error updating data: ' . $conn->error]);
        }
    } else {
        // Perform an INSERT operation if the id_pelamar does not exist
        $insertSql = "INSERT INTO seleksi_interviewuser (id_pelamar, tanggalInterviewUser, konfirmasiKehadiran_iu, dt, ka, pm, pd, bd, ktb, hasil_iu, pengumuman_iu, keterangan_iu)
                      VALUES ('$idPelamar', '$tanggalInterviewUser', '$konfirmasiKehadiranIu', '$dt', '$ka', '$pm', '$pd', '$bd', '$ktb', '$hasilIu', '$pengumumanIu', '$keteranganIu')";

        if ($conn->query($insertSql) === TRUE) {
            // Return a success message
            echo json_encode(['status' => 'success', 'message' => 'Data inserted successfully']);
        } else {
            // Return an error message for insert operation
            echo json_encode(['status' => 'error', 'message' => 'Error inserting data: ' . $conn->error]);
        }
    }

    // Close the database connection
    $conn->close();
} else {
    // Return an error if the request method is not POST
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>