<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);


require_once('koneksi.php');

if (isset($_POST['nama_lengkap'])) {
    // var_dump($_POST);
    $nama_lengkap = $_POST['nama_lengkap'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
    $informasi_lowongan = $_POST['informasi_lowongan'];
    $no_hp = $_POST['no_hp'];
    $gender = $_POST['gender'];
    $jenjang_pendidikan = $_POST['jenjang_pendidikan'];
    $jurusan = $_POST['jurusan'];
    $sekolah = $_POST['sekolah'];
    $posisi = $_POST['posisi'];



    $query_cek_jumlah_pelamar = "
    SELECT COUNT(*) AS jumlah_data
    FROM pelamar2
    WHERE MONTH(time) = MONTH(CURRENT_DATE()) AND YEAR(time) = YEAR(CURRENT_DATE())";
    $jumlah_data = $conn->query($query_cek_jumlah_pelamar)->fetch_assoc()['jumlah_data'];

    $bulan = date("n"); // Get the numeric representation of the current month

    // Define an array with the ordinal representations of each month
    $ordinalMonths = [
        'A', 'B', 'C', 'D', 'E', 'F',
        'G', 'H', 'I', 'J', 'K', 'L'
    ];

    // Get the ordinal representation of the current month
    $ordinalRepresentation = $ordinalMonths[$bulan - 1];

    $kode_pelamar = $bulan = $ordinalRepresentation . $tahun = date("y") . ($jumlah_data + 1);

    // Unggah dokumen
    $target_directory = "uploads/"; // Direktori tempat Anda akan menyimpan dokumen yang diunggah
    $dokumen = $target_directory . $kode_pelamar . '_' . basename($_FILES['dokumen']['name']);
    move_uploaded_file($_FILES['dokumen']['tmp_name'], $dokumen);
    // Check if email already exists
    $checkEmailQuery = "SELECT * FROM pelamar2 WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        // Email already exists, insert a new record with status 1
        $sql = "INSERT INTO pelamar2 (kode_pelamar, nama_lengkap, tanggal_lahir, domisili, email, informasi_lowongan, no_hp, gender, jenjang_pendidikan, jurusan, sekolah, kode_ps, dokumen, status) VALUES ('$kode_pelamar', '$nama_lengkap', '$tanggal_lahir', '$domisili', '$email', '$informasi_lowongan', '$no_hp', '$gender', '$jenjang_pendidikan', '$jurusan', '$sekolah', '$posisi', '$dokumen', 1)";

        if ($conn->query($sql) === TRUE) {
            // Update status for existing records with the same email
            $updateStatusQuery = "UPDATE pelamar2 SET status = 1 WHERE email = '$email'";
            $conn->query($updateStatusQuery);

            echo '<script type="text/javascript">
            alert("Lamaran Anda berhasil terkirim!");
            location="index.php";
            </script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        exit;
    }

    // Email does not exist, insert a new record with status 0
    $sql = "INSERT INTO pelamar2 (kode_pelamar, nama_lengkap, tanggal_lahir, domisili, email, informasi_lowongan, no_hp, gender, jenjang_pendidikan, jurusan, sekolah, kode_ps, dokumen, status) VALUES ('$kode_pelamar', '$nama_lengkap', '$tanggal_lahir', '$domisili', '$email', '$informasi_lowongan', '$no_hp', '$gender', '$jenjang_pendidikan', '$jurusan', '$sekolah', '$posisi', '$dokumen', 0)";

    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">
        alert("Lamaran Anda berhasil terkirim!");
        location="index.php";
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    exit;
}
