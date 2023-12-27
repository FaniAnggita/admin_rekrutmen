<?php
require_once '../koneksi/koneksi.php';

$sql = "SELECT * FROM pelamar2 pl
        LEFT JOIN seleksi_administrasi sa ON  pl.kode_pelamar = sa.id_pelamar
        LEFT JOIN seleksi_wii sw ON pl.kode_pelamar = sw.id_pelamar
        LEFT JOIN seleksi_psikotest sp ON pl.kode_pelamar = sp.id_pelamar
        LEFT JOIN seleksi_indepth si ON pl.kode_pelamar = si.id_pelamar
        LEFT JOIN seleksi_tesbidang st ON pl.kode_pelamar = st.id_pelamar
        LEFT JOIN seleksi_interviewuser sin ON pl.kode_pelamar = sin.id_pelamar
        LEFT JOIN pelamar_lolos pls ON pl.kode_pelamar = pls.id_pelamar";

$result = $conn->query($sql);

$rows = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
}

echo json_encode($rows);

// Close database connection if needed
$conn->close();
?>