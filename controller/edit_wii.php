<?php

require_once '../koneksi/koneksi.php';

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the POST request
    $idPelamar = $_POST['id_pelamar'];
    $waktuInterview = $_POST['waktu_interview'];
    if ($waktuInterview === '') {
        $waktuInterview = date('Y-m-d');
    }
    $konfirmasiKehadiranWii = $_POST['konfirmasi_kehadiran_wii'];
    $p = $_POST['p'];
    $a = $_POST['a'];
    $k = $_POST['k'];
    $r = $_POST['r'];
    $akun_platform = $_POST['akun_platform'];
    $ratingWii = $_POST['rating_wii'];
    $pengumumanWii = $_POST['pengumuman_wii'];
    $interviewerWii = $_POST['interviewer_wii'];

    // Check if the id_pelamar already exists in the database
    $checkSql = "SELECT * FROM seleksi_wii WHERE id_pelamar = '$idPelamar'";
    $result = $conn->query($checkSql);

    if ($result->num_rows > 0) {
        // Perform an UPDATE operation if the id_pelamar exists
        $updateSql = "UPDATE seleksi_wii
                      SET waktuInterview = '$waktuInterview',
                          konfirmasiKehadiran_wii = '$konfirmasiKehadiranWii',
                          p = '$p',
                          a = '$a',
                          k = '$k',
                          r = '$r',
                          akun_platform = '$akun_platform',
                          rating_wii = '$ratingWii',
                          pengumuman_wii = '$pengumumanWii',
                          interviewer_wii = '$interviewerWii'
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
        $insertSql = "INSERT INTO seleksi_wii (id_pelamar, waktuInterview, konfirmasiKehadiran_wii, p, a, k, r, rating_wii, pengumuman_wii, interviewer_wii, akun_platform)
                      VALUES ('$idPelamar', '$waktuInterview', '$konfirmasiKehadiranWii', '$p', '$a', '$k', '$r', '$ratingWii', '$pengumumanWii', '$interviewerWii', '$akun_platform')";

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