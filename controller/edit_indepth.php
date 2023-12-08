<?php

require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the POST request
    $idPelamar = $_POST['id_pelamar'];
    // Assuming $_POST['tanggalIndepth'] is the value from the POST request
    $tanggalIndepth = $_POST['tanggal_indepth'];
    if ($tanggalIndepth === '') {
        $tanggalIndepth = date('Y-m-d H:i:s');
    }

    $konfirmasiKehadiranIn = $_POST['konfirmasi_kehadiran_in'];
    $KTB = $_POST['KTB'];
    $KPR = $_POST['KPR'];
    $Siker = $_POST['Siker'];
    $hasilIndepth = $_POST['hasil_indepth'];
    $interviewerIndepth = $_POST['interviewer_indepth'];
    $pengumumanIndepth = $_POST['pengumuman_in'];
    $keteranganIndepth = $_POST['keterangan_in'];


    // Check if the id_pelamar already exists in the database
    $checkSql = "SELECT * FROM seleksi_indepth WHERE id_pelamar = '$idPelamar'";
    $result = $conn->query($checkSql);

    if ($result->num_rows > 0) {
        // Perform an UPDATE operation if the id_pelamar exists
        $updateSql = "UPDATE seleksi_indepth
                      SET tanggalIndepth = '$tanggalIndepth',
                          konfirmasiKehadiran_in = '$konfirmasiKehadiranIn',
                          KTB = '$KTB',
                          KPR = '$KPR',
                          Siker = '$Siker',
                          hasilIndepth = '$hasilIndepth',
                          interviewerIndepth = '$interviewerIndepth',
                          pengumuman_in = '$pengumumanIndepth',
                          keterangan_in = '$keteranganIndepth'
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
        $insertSql = "INSERT INTO seleksi_indepth (id_pelamar, tanggalIndepth, konfirmasiKehadiran_in, KTB, KPR, Siker, hasilIndepth, interviewerIndepth, pengumuman_in, keterangan_in)
                      VALUES ('$idPelamar', '$tanggalIndepth', '$konfirmasiKehadiranIn', '$KTB', '$KPR', '$Siker', '$hasilIndepth', '$interviewerIndepth', '$pengumumanIndepth', '$keteranganIndepth')";

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