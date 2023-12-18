<?php
require_once '../koneksi/koneksi.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_posisi = $_POST['id_ps'];
    $kode_ps = $_POST['kode_ps'];
    $nama_ps = $_POST['nama_ps'];
    $max_usia = $_POST['max_usia'];
    $jumlah_kebutuhan = $_POST['jumlah_kebutuhan'];
    $status_posisi = $_POST['status_posisi'];

    // Perform update if id_posisi is provided
    if (!empty($id_posisi)) {
        // Get the previous jumlah_kebutuhan from the database
        $result = mysqli_query($conn, "SELECT jumlah_kebutuhan FROM posisi WHERE id_ps = '$id_posisi'");
        $row = mysqli_fetch_assoc($result);
        $previous_jumlah_kebutuhan = $row['jumlah_kebutuhan'];

        $update_sql = "UPDATE posisi 
                       SET kode_ps = '$kode_ps', nama_ps = '$nama_ps', 
                           max_usia = '$max_usia', jumlah_kebutuhan = '$jumlah_kebutuhan', 
                           status_posisi = '$status_posisi'
                       WHERE id_ps = '$id_posisi'";

        if (mysqli_query($conn, $update_sql)) {
            echo "Data updated successfully";

            // Check if jumlah_kebutuhan has changed
            if ($previous_jumlah_kebutuhan != $jumlah_kebutuhan) {
                // Save the change to histori_kebutuhan_posisi
                $insert_log_sql = "INSERT INTO histori_kebutuhan_posisi (kode_ps, date, jumlah_kebutuhan)
                                   VALUES ('$kode_ps', NOW(), '$jumlah_kebutuhan')";

                if (mysqli_query($conn, $insert_log_sql)) {
                    echo "";
                } else {
                    echo "Error updating histori kebutuhan: " . mysqli_error($conn);
                }
            }
        } else {
            echo "Error updating data: " . mysqli_error($conn);
        }
    } else {
        echo "ID posisi not provided. Update operation requires an ID.";
    }
}

// Close the database connection
mysqli_close($conn);
?>