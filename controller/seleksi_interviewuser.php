<?php
require_once '../koneksi/koneksi.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_pelamar = $_POST['id_pelamar'];
    $tanggalInterviewUser = $_POST['tanggalIntUser'];
    $konfirmasiKehadiran = $_POST['konfirmasiKehadiran'];
    $dt = $_POST['dt'];
    $ka = $_POST['ka'];
    $pm = $_POST['pm'];
    $pd = $_POST['pd'];
    $bd = $_POST['bd'];
    $ktb = $_POST['ktb'];
    $interviewer = $_POST['id_int'];
    $hasil = $_POST['hasil'];
    $pengumuman = $_POST['pengumuman'];
    $keterangan = $_POST['keterangan'];

    $id_int_string = implode(',', $interviewer);

    // Check if a record with the same id_pelamar exists
    $check_sql = "SELECT id_interview_user FROM seleksi_interviewuser WHERE id_pelamar = '$id_pelamar'";
    $result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($result) > 0) {
        // Update the existing record
        $update_sql = "UPDATE seleksi_interviewuser SET tanggalInterviewUser = '$tanggalInterviewUser', konfirmasiKehadiran_iu = '$konfirmasiKehadiran', dt = '$dt', ka = '$ka', pm = '$pm', pd = '$pd', bd = '$bd', ktb = '$ktb', interviewer_Iu = '$id_int_string', hasil_iu = '$hasil', pengumuman_iu = '$pengumuman', keterangan_iu = '$keterangan' WHERE id_pelamar = '$id_pelamar'";

        if (mysqli_query($conn, $update_sql)) {
            echo "Data updated successfully";
        } else {
            echo "Error updating data: " . mysqli_error($conn);
        }
    } else {
        // Insert a new record
        $insert_sql = "INSERT INTO seleksi_interviewuser (id_pelamar, tanggalInterviewUser, konfirmasiKehadiran_iu, dt, ka, pm, pd, bd, ktb, interviewer_iu, hasil_iu, pengumuman_iu, keterangan_iu) VALUES ('$id_pelamar', '$tanggalInterviewUser', '$konfirmasiKehadiran', '$dt', '$ka', '$pm', '$pd', '$bd', '$ktb', '$id_int_string', '$hasil', '$pengumuman', '$keterangan')";

        if (mysqli_query($conn, $insert_sql)) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }
}

// Close the database connection
mysqli_close($conn);
