<?php

require_once '../koneksi/koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table id="deviceTable" class="table display table-sm table-bordered table-striped">
        <thead>
            <tr style="font-size: 12px;">
                <th colspan="5"></th>
                <th colspan="7" class="table-warning text-center">Administrasi</th>
                <th colspan="11" class="table-info text-center">WII</th>
                <th colspan="4" class="table-success text-center">Psikotest</th>
                <th colspan="9" class="table-danger text-center">Indepth</th>
                <th colspan="9" class="table-primary text-center">Tes Bidang</th>
                <th colspan="12" class="table-warning text-center">Interview User</th>
                <th colspan="4"></th>
            </tr>
            <tr>

                <th>Tgl. Daftar</th>
                <th>Kd. Ps</th>
                <th>Pos. Refer</th>
                <th>Kd. Plmr</th>
                <th>Nama</th>
                <!-- Administrasi -->
                <th>Tgl. Adm</th>

                <th>CV</th>
                <th>Klf</th>
                <th> Pgl</th>
                <th>Hasil</th>
                <th>Keterangan</th>
                <!-- Akhir Administrasi -->
                <!-- WII -->
                <th>Waktu WII</th>
                <th>Konfirmasi</th>
                <th>P</th>
                <th>A</th>
                <th>K</th>
                <th>R</th>
                <th>Platform Loker</th>
                <th>Akun Platform</th>
                <th>Interviewer</th>
                <th>Hasil</th>
                <th>Pengumuman</th>
                <!-- Akhir WII -->
                <!-- Psikotest -->
                <th>Tanggal Psikotest</th>
                <th>Konfirmasi Kehadiran</th>
                <th>Pengumuman</th>
                <th>Hasil Psikotest</th>
                <!-- Akhr Psikotest -->
                <!-- Indepth -->
                <th>Tanggal Indepth</th>
                <th>Konfirmasi Kehadiran</th>
                <th>KTB</th>
                <th>KPR</th>
                <th>SiKer</th>
                <th>Interviewer Indepth</th>
                <th>Pengumuman Indepth</th>
                <th>Keterangan</th>
                <th>Hasil Indepth</th>
                <!-- Akhir Indepth -->
                <!-- Tes Bidang -->
                <th>Tanggal Tes Bidang</th>
                <th>Konfirmasi Kehadiran Tes Bidang</th>
                <th>Nilai TB 1</th>
                <th>Korektor 1</th>
                <th>Nilai TBg 2</th>
                <th>Korektor 2</th>
                <th>Keterangan</th>
                <th>Pengumuman</th>
                <th>Hasil TB</th>
                <!-- Akhir Tes Bidang -->
                <!-- Interview User -->
                <th>Tanggal Interview User</th>
                <th>Konfirmasi Kehadiran</th>
                <th>DT</th>
                <th>KA</th>
                <th>PM</th>
                <th>PD</th>
                <th>BD</th>
                <th>KTB2</th>
                <th>Keterangan</th>
                <th>Pengumuman</th>
                <th>Interviewer</th>
                <th>Hasil</th>
                <!-- Akhir Interview User -->
                <!-- Hasil Akhir -->
                <th>Hasil Akhir</th>
                <th>Alasan Tidak Lolos</th>
                <th>SPKWT</th>
                <th>Masuk Kerja</th>
                <!--Akhir Hasil Akhir -->

            </tr>
        </thead>
        <tbody>
            <?php

            // Ambil data dari database dan tampilkan dalam tabel
            $sql = "SELECT * FROM pelamar2 pl
                                                LEFT JOIN seleksi_administrasi sa ON  pl.kode_pelamar = sa.id_pelamar
                                                LEFT JOIN seleksi_wii sw ON pl.kode_pelamar = sw.id_pelamar
                                                LEFT JOIN seleksi_psikotest sp ON pl.kode_pelamar = sp.id_pelamar
                                                LEFT JOIN seleksi_indepth si ON pl.kode_pelamar = si.id_pelamar
                                                LEFT JOIN seleksi_tesbidang st ON pl.kode_pelamar = st.id_pelamar
                                                LEFT JOIN seleksi_interviewuser sin ON pl.kode_pelamar = sin.id_pelamar
                                                LEFT JOIN pelamar_lolos pls ON pl.kode_pelamar = pls.id_pelamar";




            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {


                    echo "<tr style='line-height: 25px;'>";

                    // echo "<td class='not-editable'><a href='edit_rekrutmen.php?id_pelamar=" . $row['id'] . "' class='btn btn-warning btn-sm'><i class='fa-solid fa-envelope'></i></a></td>";
                    ?>

                    <?php
                    echo "<td class='not-editable'>" . date('Y-m-d', strtotime($row['time'])) . "</td>";
                    echo "<td class='not-editable'>" . $row['kode_ps'] . "</td>";
                    echo "<td class='editable-text'>" . "</td>";
                    echo "<td class='$tes not-editable'>" . $row['kode_pelamar'] . "</td>";
                    echo "<td class='$tes not-editable'>" . $row['nama_lengkap'] . "</td>";
                    // Administrasi
                    echo "<td class='editable-datetime'>" . $row['waktuInterview'] . "</td>";

                    $options = ['1', '0', 'pilih'];
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode($options)) . "'>" . $row['nilai_cv'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode($options)) . "'>" . $row['nilai_kualifikasi'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode($options)) . "'>" . $row['nilai_pengalaman'] . "</td>";
                    $hasilSeleksiAdmOptions = ['lolos', 'tidak lolos', 'pilih'];
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode($hasilSeleksiAdmOptions)) . "'>" . $row['hasil_seleksi_adm'] . "</td>";
                    echo "<td class='editable-text'>" . $row['keterangan_adm'] . "</td>";
                    // Akhir Administrasi
                    // WII
                    echo "<td class='editable-datetime'>" . $row['waktuInterview'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['bersedia', 'tidak bersedia', 'reschedule', 'pilih'])) . "'>" . $row['konfirmasiKehadiran_wii'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['1', '0', 'pilih'])) . "'>" . $row['p'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['1', '0', 'pilih'])) . "'>" . $row['a'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['1', '0', 'pilih'])) . "'>" . $row['k'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['1', '0', 'pilih'])) . "'>" . $row['r'] . "</td>";
                    echo "<td class='not-editable'>" . $row['informasi_lowongan'] . "</td>";
                    echo "<td class='editable-text'>" . "</td>";
                    $interviewer_id = $row['interviewer_wii'];
                    $sql_interviewer = "SELECT id_int, nama_int FROM interviewer";
                    $result_interviewer = $conn->query($sql_interviewer);

                    // Dapatkan daftar interviewer untuk combobox
                    $listOfInterviewers = [];
                    $defaultValue = '';

                    while ($interviewer = $result_interviewer->fetch_assoc()) {
                        $listOfInterviewers[] = $interviewer['nama_int'];

                        // Cek apakah id_int cocok dengan interviewer_wii
                        if ($interviewer['nama_int'] == $interviewer_id) {
                            $defaultValue = $interviewer['nama_int'];
                        }
                    }

                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode($listOfInterviewers)) . "'>" . $defaultValue . "</td>";

                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['lolos', 'tidak lolos', 'pilih'])) . "'>" . $row['rating_wii'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['sudah', 'belum'])) . "'>" . $row['pengumuman_wii'] . "</td>";
                    // Akhir WII
                    // Psikotest
                    echo "<td class='editable-datetime'>" . $row['tanggalPsikotest'] . "</td>"; // Use class 'editable-datetime' for datetime input
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Bersedia', 'Tidak Bersedia', 'pilih'])) . "'>" . $row['konfirmasiKehadiran'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Sudah', 'Belum', 'pilih'])) . "'>" . $row['pengumuman_psikotest'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Lolos', 'Tidak Lolos', 'pilih'])) . "'>" . $row['rating_psikotest'] . "</td>";
                    // Akhir Psikotest
            
                    // Indepth
                    echo "<td class='editable-datetime'>" . $row['tanggalIndepth'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Pilih', 'Bersedia', 'Tidak Bersedia', 'Reschedule'])) . "'>" . $row['konfirmasiKehadiran_in'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Pilih', '1', '0'])) . "'>" . $row['KTB'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Pilih', '1', '0'])) . "'>" . $row['KPR'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Pilih', '1', '0'])) . "'>" . $row['Siker'] . "</td>";
                    $interviewer_id = $row['interviewerIndepth'];
                    $sql_interviewer = "SELECT id_int, nama_int FROM interviewer";
                    $result_interviewer = $conn->query($sql_interviewer);

                    $listOfInterviewers = [];
                    $defaultValue = '';

                    while ($interviewer = $result_interviewer->fetch_assoc()) {
                        $listOfInterviewers[] = $interviewer['nama_int'];

                        if ($interviewer['nama_int'] == $interviewer_id) {
                            $defaultValue = $interviewer['nama_int'];
                        }
                    }

                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode($listOfInterviewers)) . "'>" . $defaultValue . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Pilih', 'Sudah', 'Belum'])) . "'>" . $row['pengumuman_in'] . "</td>";
                    echo "<td class='editable-text'>" . $row['keterangan_in'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Pilih', 'Lolos', 'Tidak Lolos'])) . "'>" . $row['hasilIndepth'] . "</td>";
                    // Akhir Indepth
                    // Test Bidang
                    echo "<td class='editable-datetime'>" . $row['tanggalTesBidang'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['bersedia', 'tidak bersedia', 'reschedule', 'pilih'])) . "'>" . $row['konfirmasi_kehadiran_tb'] . "</td>";
                    echo "<td class='editable-text'>" . $row['nilaiTesBidang1'] . "</td>";

                    $interviewer_id = $row['korektor1'];
                    $sql_interviewer = "SELECT id_int, nama_int FROM interviewer";
                    $result_interviewer = $conn->query($sql_interviewer);

                    $listOfInterviewers1 = [];
                    $defaultValue1 = '-';

                    while ($interviewer = $result_interviewer->fetch_assoc()) {
                        $listOfInterviewers1[] = $interviewer['nama_int'];

                        if ($interviewer['nama_int'] == $interviewer_id) {
                            $defaultValue1 = $interviewer['nama_int'];
                        }
                    }

                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode($listOfInterviewers1)) . "'>" . $defaultValue1 . "</td>";


                    echo "<td class='editable-text'>" . $row['nilaiTesBidang2'] . "</td>";

                    $interviewer_id = $row['korektor2'];
                    $sql_interviewer = "SELECT id_int, nama_int FROM interviewer";
                    $result_interviewer = $conn->query($sql_interviewer);

                    $listOfInterviewers2 = [];
                    $defaultValue2 = '-';

                    while ($interviewer = $result_interviewer->fetch_assoc()) {
                        $listOfInterviewers2[] = $interviewer['nama_int'];

                        if ($interviewer['nama_int'] == $interviewer_id) {
                            $defaultValue2 = $interviewer['nama_int'];
                        }
                    }

                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode($listOfInterviewers2)) . "'>" . $defaultValue2 . "</td>";
                    echo "<td class='editable-text'>" . $row['keterangan_tb'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Pilih', 'Sudah', 'Belum'])) . "'>" . $row['pengumuman_tb'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Pilih', 'Lolos', 'Tidak Lolos'])) . "'>" . $row['hasil_tb'] . "</td>";
                    // Akhir Test Bidang
                    // Interview User
                    echo "<td class='editable-datetime'>" . $row['tanggalInterviewUser'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Pilih', 'Bersedia', 'Tidak Bersedia', 'Reschedule'])) . "'>" . $row['konfirmasiKehadiran_iu'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['1', '0', 'pilih'])) . "'>" . $row['dt'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['1', '0', 'pilih'])) . "'>" . $row['ka'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['1', '0', 'pilih'])) . "'>" . $row['pm'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['1', '0', 'pilih'])) . "'>" . $row['pd'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['1', '0', 'pilih'])) . "'>" . $row['bd'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['1', '0', 'pilih'])) . "'>" . $row['ktb'] . "</td>";
                    echo "<td class='editable-text'>" . $row['keterangan_iu'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Pilih', 'Sudah', 'Belum'])) . "'>" . $row['pengumuman_iu'] . "</td>";

                    $interviewer_ids = explode(',', $row['interviewer_iu']); // Memisahkan ID yang terpisah koma menjadi array
                    $interviewer_names = array();

                    foreach ($interviewer_ids as $interviewer_id) {
                        $sql_interviewer = "SELECT nama_int FROM interviewer WHERE id_int = '$interviewer_id'";
                        $result_interviewer = $conn->query($sql_interviewer);

                        if ($result_interviewer) {
                            if ($result_interviewer->num_rows > 0) {
                                $interviewer_name = $result_interviewer->fetch_assoc()['nama_int'];
                                $interviewer_names[] = $interviewer_name; // Menyimpan nama interviewer ke dalam array
                            }
                        } else {
                            echo "Error: " . $sql_interviewer . "<br>" . $conn->error;
                        }
                    }

                    // Menggabungkan nama interviewer menjadi satu string dengan koma
                    $interviewer_names_string = implode(', ', $interviewer_names);

                    echo "<td>" . $interviewer_names_string . "</td>"; // multiple choice interviewer
            

                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Pilih', 'Lolos', 'Tidak Lolos'])) . "'>" . $row['hasil_iu'] . "</td>";

                    // Akhir Interview User
                    // Hasil akhir
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Proses', 'Lolos', 'Tidak Lolos'])) . "'>" . $row['hasil_akhir'] . "</td>";
                    ?>
                    <td>
                        <?php
                        if ($row['hasil_akhir'] === 'Tidak Lolos') {
                            //    Administrasi
                            if ($row['hasil_seleksi_adm'] == 'tidak lolos') {
                                if ($row['nilai_cv'] === '0') {
                                    echo 'CV';
                                }
                                if ($row['nilai_kualifikasi'] === '0') {
                                    echo ', Kualifikasi';
                                }
                                if ($row['nilai_pengalaman'] === '0') {
                                    echo ', Pengalaman';
                                }
                            }

                            // WII
                            if ($row['rating_wii'] == 'tidak lolos') {
                                if ($row['p'] === '0') {
                                    echo 'P';
                                }
                                if ($row['a'] === '0') {
                                    echo 'A';
                                }
                                if ($row['k'] === '0') {
                                    echo 'K';
                                }
                                if ($row['r'] === '0') {
                                    echo 'R';
                                }
                            }

                            // Psikotest
                            if ($row['rating_psikotest'] == 'tidak lolos') {
                                echo 'Psikotest';
                            }

                            // Indepth 
                            if ($row['hasilIndepth'] == 'tidak lolos') {
                                if ($row['KTB'] === '0') {
                                    echo 'KTB';
                                }
                                if ($row['KPR'] === '0') {
                                    echo 'KPR';
                                }
                                if ($row['Siker'] === '0') {
                                    echo 'Siker';
                                }
                            }

                            // INterviewer User
                            if ($row['hasil_iu'] == 'tidak lolos') {
                                if ($row['dt'] === '0') {
                                    echo 'dt';
                                }
                                if ($row['ka'] === '0') {
                                    echo 'ka';
                                }
                                if ($row['pm'] === '0') {
                                    echo 'pm';
                                }
                                if ($row['pd'] === '0') {
                                    echo 'pd';
                                }
                                if ($row['bd'] === '0') {
                                    echo 'bd';
                                }
                                if ($row['ktb'] === '0') {
                                    echo 'ktb';
                                }
                            }

                            // Interview User
                
                        }
                        ?>
                    </td>
                    <?php
                    echo "<td class='editable-text'>" . $row['spkwt'] . "</td>";
                    echo "<td class='editable-date'>" . $row['onboard'] . "</td>";
                    // AKhir Hasil Akhir
                    echo "</tr>";
                }
            }

            // Close the database connection
            $conn->close();
            ?>
        </tbody>
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>
    <script>
        function exportToExcel() {
            // Get table element
            var table = document.getElementById('deviceTable');

            // Generate an array of arrays containing the table data
            var data = [];
            for (var i = 0; i < table.rows.length; i++) {
                var rowData = [];
                for (var j = 0; j < table.rows[i].cells.length; j++) {
                    rowData.push(table.rows[i].cells[j].textContent);
                }
                data.push(rowData);
            }

            // Create a new workbook and add a worksheet
            var wb = XLSX.utils.book_new();
            var ws = XLSX.utils.aoa_to_sheet(data);

            // Add the worksheet to the workbook
            XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');

            // Save the workbook as an Excel file
            XLSX.writeFile(wb, 'data_rekrutmen.xlsx');
        }

        // Automatically trigger the export function when the page is loaded
        document.addEventListener('DOMContentLoaded', exportToExcel);

    </script>

</body>

</html>