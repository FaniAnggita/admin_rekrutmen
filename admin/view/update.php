<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $rekomendasi = $_POST['rekomendasi'];

    // Ubah nilai yang diterima dari JavaScript kembali ke ENUM yang sesuai
    if ($rekomendasi == 0) {
        $rekomendasi = 'choose';
    } elseif ($rekomendasi == 1) {
        $rekomendasi = 'yes';
    } elseif ($rekomendasi == 2) {
        $rekomendasi = 'no';
    }

    // Lakukan koneksi ke database dan jalankan perintah SQL UPDATE
    // Gantilah dengan kode sesuai dengan sistem Anda

    // Contoh penggunaan mysqli
    $mysqli = new mysqli("localhost", "root", "", "u7120080_rekrutmen");

    if ($mysqli->connect_error) {
        die("Koneksi database gagal: " . $mysqli->connect_error);
    }

    $sql = "UPDATE pelamar2 SET rekomendasi = ? WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("si", $rekomendasi, $id);

    if ($stmt->execute()) {
        echo "Data berhasil diperbarui.";
    } else {
        echo "Gagal memperbarui data.";
    }

    $stmt->close();
    $mysqli->close();
}
