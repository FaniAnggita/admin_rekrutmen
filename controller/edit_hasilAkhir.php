<?php

require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the POST request
    $idPelamar = $_POST['id_pelamar'];
    $spkwt = $_POST['spkwt'];
    $onboard = $_POST['onboard'];
    if ($onboard === '') {
        $onboard = date('Y-m-d');
    }
    $hasilAkhir = $_POST['hasil_akhir'];
    $alasanTidakLolos = $_POST['alasan_tidak_lolos'];


    // Check if the id_pelamar already exists in the database
    $checkSql = "SELECT * FROM pelamar_lolos WHERE id_pelamar = '$idPelamar'";
    $result = $conn->query($checkSql);

    if ($result->num_rows > 0) {
        // Perform an UPDATE operation if the id_pelamar exists
        $updateSql = "UPDATE pelamar_lolos
                      SET spkwt = '$spkwt',
                          onboard = '$onboard',
                          hasil_akhir = '$hasilAkhir',
                          alasan_tidak_lolos = '$alasanTidakLolos'
                       WHERE id_pelamar = '$idPelamar'";

        $updatePelamar =
            "UPDATE pelamar2
             SET status_hasil_akhir = '$hasilAkhir'
             WHERE id = '$idPelamar'";

        $conn->query($updatePelamar);

        if ($conn->query($updateSql) === TRUE) {
            // Return a success message
            echo json_encode(['status' => 'success', 'message' => 'Data updated successfully']);
        } else {
            // Return an error message for update operation
            echo json_encode(['status' => 'error', 'message' => 'Error updating data: ' . $conn->error]);
        }
    } else {
        // Perform an INSERT operation if the id_pelamar does not exist
        $insertSql = "INSERT INTO pelamar_lolos (id_pelamar, spkwt, onboard, hasil_akhir, alasan_tidak_lolos)
                      VALUES ('$idPelamar', '$spkwt', '$onboard', '$hasilAkhir', '$alasanTidakLolos')";

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