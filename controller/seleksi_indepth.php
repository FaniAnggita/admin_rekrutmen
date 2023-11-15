<?php
require_once '../koneksi/koneksi.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_pelamar = $_POST['id_pelamar'];
    $tanggalIndepth = $_POST['tanggalIndepth'];
    $konfirmasiKehadiran = $_POST['konfirmasiKehadiran'];
    $KTB = $_POST['KTB'];
    $KPR = $_POST['KPR'];
    $Siker = $_POST['Siker'];
    $hasilIndepth = $_POST['hasil'];
    $interviewerIndepth = $_POST['interviewer'];
    $pengumuman = $_POST['pengumuman'];
    $keterangan = $_POST['keterangan'];

    // Check if a record with the same id_pelamar exists
    $check_sql = "SELECT id_indepth FROM seleksi_indepth WHERE id_pelamar = '$id_pelamar'";
    $result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($result) > 0) {
        // Update the existing record
        $update_sql = "UPDATE seleksi_indepth SET tanggalIndepth = '$tanggalIndepth', konfirmasiKehadiran_in = '$konfirmasiKehadiran', KTB = '$KTB', KPR = '$KPR', Siker = '$Siker', hasilIndepth = '$hasilIndepth', interviewerIndepth = '$interviewerIndepth', pengumuman_in = '$pengumuman', keterangan_in = '$keterangan' WHERE id_pelamar = '$id_pelamar'";

        if (mysqli_query($conn, $update_sql)) {
            echo "Data updated successfully";
        } else {
            echo "Error updating data: " . mysqli_error($conn);
        }
    } else {
        // Insert a new record
        $insert_sql = "INSERT INTO seleksi_indepth (id_pelamar, tanggalIndepth, konfirmasiKehadiran_in, KTB, KPR, Siker, hasilIndepth, interviewerIndepth, pengumuman_in, keterangan_in) VALUES ('$id_pelamar', '$tanggalIndepth', '$konfirmasiKehadiran', '$KTB', '$KPR', '$Siker', '$hasilIndepth', '$interviewerIndepth', '$pengumuman', '$keterangan')";

        if (mysqli_query($conn, $insert_sql)) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
