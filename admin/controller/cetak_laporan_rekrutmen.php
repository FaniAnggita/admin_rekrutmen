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
                <th colspan="14">Data Pelamar</th>
                <th colspan="7" class="table-warning text-center">Administrasi</th>
                <th colspan="13" class="table-info text-center">WII</th>
                <th colspan="6" class="table-success text-center">Psikotest</th>
                <th colspan="10" class="table-danger text-center">Indepth</th>
                <th colspan="10" class="table-primary text-center">Tes Bidang</th>
                <th colspan="13" class="table-warning text-center">Interview User</th>
                <th colspan="3"></th>
            </tr>
            <tr class="text-center" style="font-size: 12px;">
                <!-- <th><input type="checkbox" id="select-all"> </th> -->
                <th class="table-danger"></th>
                <th class="table-primary">Tgl. dftr</th>
                <th class="table-primary">Kode JBT</th>
                <th class="table-primary">Refer</th>
                <th class="table-primary">Kd. Plmr</th>
                <th class="table-primary">Nama</th>
                <th class="table-primary">Jenjang</th>
                <th class="table-primary">Jurusan/Prodi</th>
                <th class="table-primary">Sekolah/Univ.</th>
                <th class="table-primary">Domisili</th>
                <th class="table-primary">JK</th>
                <th class="table-primary">Tgl. Lahir</th>
                <th class="table-primary">Usia</th>
                <th class="table-primary">No. HP</th>

                <!-- Administrasi -->
                <th class="table-warning">Tgl. Adm</th>
                <th class="table-warning">Dok</th>
                <th class="table-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Nilai CV">CV</th>
                <th class="table-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Nilai kualifikasi">Klf</th>
                <th class="table-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Nilai Pengalaman">Pgl</th>
                <th class="table-warning not-editable" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Hasil Seleksi Administrasi">Hasil
                </th>
                <th class="table-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Keterangan Seleksi Administrasi">Ket</th>
                <!-- Akhir Administrasi -->
                <!-- WII -->
                <th class="table-info" class="table-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tanggal WII">Tgl WII</th>
                <th class="table-info" class="table-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Jam WII">Jam</th>
                <th class="table-info" data-bs-title="Konfirmasi WII">confirm</th>
                <th class="table-info" data-bs-title="Pakar">P</th>
                <th class="table-info" data-bs-title="Antusias">A</th>
                <th class="table-info">K</th>
                <th class="table-info">R</th>
                <th class="table-info">Platform</th>
                <th class="table-info">Akun Platform</th>
                <th class="table-info">Interviewer</th>
                <th class="table-info">Hasil</th>
                <th class="table-info">Ket</th>
                <th class="table-info">info</th>
                <!-- Akhir WII -->
                <!-- Psikotest -->
                <th class="table-success">tgl Psikotest</th>
                <th class="table-success">Jam</th>
                <th class="table-success">Confirm</th>
                <th class="table-success">Hasil</th>
                <th class="table-success">Ket</th>
                <th class="table-success">info</th>
                <!-- Akhr Psikotest -->
                <!-- Indepth -->
                <th class="table-danger">Tgl Indepth</th>
                <th class="table-danger">Jam</th>
                <th class="table-danger">Confirm</th>
                <th class="table-danger">KTB</th>
                <th class="table-danger">KPR</th>
                <th class="table-danger">SiKer</th>
                <th class="table-danger">Interviewer</th>
                <th class="table-danger">Hasil</th>
                <th class="table-danger">ket</th>
                <th class="table-danger">info</th>

                <!-- Akhir Indepth -->
                <!-- Tes Bidang -->
                <th class="table-primary">tgl Tes Bd</th>
                <th class="table-primary">Jam</th>
                <th class="table-primary">Confirm</th>
                <th class="table-primary">Nilai TB 1</th>
                <th class="table-primary">Korektor 1</th>
                <th class="table-primary">Nilai TB 2</th>
                <th class="table-primary">Korektor 2</th>
                <th class="table-primary">Hasil</th>
                <th class="table-primary">ket</th>
                <th class="table-primary">info</th>

                <!-- Akhir Tes Bidang -->
                <!-- Interview User -->
                <th class="table-warning">Tanggal User</th>
                <th class="table-warning">Jam</th>
                <th class="table-warning">Confirm</th>
                <th class="table-warning">DT</th>
                <th class="table-warning">KA</th>
                <th class="table-warning">PM</th>
                <th class="table-warning">PD</th>
                <th class="table-warning">BD</th>
                <th class="table-warning">KTB2</th>
                <th class="table-warning">Interviewer</th>
                <th class="table-warning">Hasil</th>
                <th class="table-warning">ket</th>
                <th class="table-warning">info</th>
                <!-- Akhir Interview User -->
                <!-- Hasil Akhir -->
                <!-- <th class="table-danger">Hasil Akhir</th> -->
                <th class="table-danger">Alasan Tidak Lolos</th>
                <th class="table-success">SPKWT</th>
                <th class="table-success">Masuk Kerja</th>
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

            // Periksa apakah ada filter tanggal yang disetel
            if (isset($_GET['start_date']) && isset($_GET['end_date']) && $_GET['start_date'] != '' && $_GET['end_date'] != '') {
                $start_date = $_GET['start_date'];
                $end_date = $_GET['end_date'];
                $status = $_GET['status'];
                $kondisi = '';

                if ($status == 'Administrasi') {
                    $kondisi = 'sa.tanggal_administrasi';
                } elseif ($status == 'WII') {
                    $kondisi = 'sw.waktuInterview';
                } elseif ($status == 'Psikotest') {
                    $kondisi = 'sp.tanggalPsikotest';
                } elseif ($status == 'Indepth') {
                    $kondisi = 'si.tanggalIndepth';
                } elseif ($status == 'Tes Bidang') {
                    $kondisi = 'st.tanggalTesBidang';
                } elseif ($status == 'Interview User') {
                    $kondisi = 'sin.tanggalInterviewUser';
                } else {
                    $kondisi = '';
                }

                // Tambahkan kondisi tanggal ke query SQL
                if ($kondisi !== '')
                    $sql .= " WHERE $kondisi BETWEEN '$start_date' AND '$end_date'";
            }


            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    $tes = ($row['status'] == 1 ? 'text-danger' : '');
                    echo "<tr style='line-height: 25px;'>";
                    // echo "<td class='not-editable'><input type='checkbox' class='select-checkbox' data-id='" . $row['id'] . "' style='position: absolute; z-index: 9;'></td>";
                    // echo "<td class='not-editable'><a href='edit_rekrutmen.php?id_pelamar=" . $row['id'] . "' class='btn btn-warning btn-sm'><i class='fa-solid fa-envelope'></i></a></td>";
            ?>

                    <?php
                    echo "<td class='not-editable'>" . date('Y-m-d', strtotime($row['time'])) . "</td>";
                    echo "<td class='not-editable'>" . $row['kode_ps'] . "</td>";
                    echo "<td class='editable-text'>" . $row['refer_posisi'] . "</td>";
                    echo "<td class='$tes not-editable'>" . $row['kode_pelamar'] . "</td>";
                    echo "<td class='$tes not-editable'>" . $row['nama_lengkap'] . "</td>";
                    echo "<td class='not-editable'>" . $row['jenjang_pendidikan'] . "</td>";
                    echo "<td class='not-editable'>" . $row['jurusan'] . "</td>";
                    echo "<td class='not-editable'>" . $row['sekolah'] . "</td>";
                    echo "<td class='not-editable'>" . $row['domisili'] . "</td>";
                    echo "<td class='not-editable'>" . ($row['gender'] == 'Laki-Laki' ? 'L' : 'P') . "</td>";
                    echo "<td class='not-editable'>" . $row['tanggal_lahir'] . "</td>";
                    // Create a DateTime object for the birthdate
                    $birthdate = new DateTime($row['tanggal_lahir']);
                    // Get the current date
                    $currentDate = new DateTime();
                    // Calculate the difference between the current date and the birthdate
                    $age = $currentDate->diff($birthdate)->y;
                    // Display the age in your table cell
                    echo "<td class='not-editable'>" . $age . "</td>";
                    echo "<td class='not-editable'>" . $row['no_hp'] . "</td>";

                    // Administrasi
                    echo "<td class='editable-date'>" . $row['tanggal_administrasi'] . "</td>";
                    echo "<td class='not-editable'><a href='../../karir_pim/" . $row['dokumen'] . "' target='_blank'><i class='fa-solid fa-eye'></i></a></td>";
                    $options = ['', '1', '0'];
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode($options)) . "'>" . $row['nilai_cv'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode($options)) . "'>" . $row['nilai_kualifikasi'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode($options)) . "'>" . $row['nilai_pengalaman'] . "</td>";
                    $hasilSeleksiAdmOptions = ['lolos', 'tidak lolos', 'blm seleksi'];
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode($hasilSeleksiAdmOptions)) . "'>" . $row['hasil_seleksi_adm'] . "</td>";
                    echo "<td class='editable-text'>" . $row['keterangan_adm'] . "</td>";
                    // Akhir Administrasi

                    // WII
                    echo "<td class='editable-date'>" . $row['waktuInterview'] . "</td>";
                    echo "<td class='editable-time'>" . (isset($row['jam_wii']) ? date('H:i', strtotime($row['jam_wii'])) : '') . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'bersedia', 'tidak bersedia', 'reschedule'])) . "'>" . $row['konfirmasiKehadiran_wii'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['p'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['a'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['k'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['r'] . "</td>";
                    echo "<td class='not-editable'>" . $row['informasi_lowongan'] . "</td>";
                    echo "<td class='editable-ac'>" . $row['akun_platform'] . "</td>";

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

                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'lolos', 'tidak lolos', 'blm dijadwalkan'])) . "'>" . $row['rating_wii'] . "</td>";
                    echo "<td class='editable-text'>" . $row['keterangan_wii'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'sudah', 'belum'])) . "'>" . $row['pengumuman_wii'] . "</td>";
                    // Akhir WII
                    // Psikotest
                    echo "<td class='editable-date'>" . $row['tanggalPsikotest'] . "</td>"; // Use class 'editable-date' for datetime input
                    echo "<td class='editable-time'>" . (isset($row['jam_psikotest']) ? date('H:i', strtotime($row['jam_psikotest'])) : '') . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Bersedia', 'Tidak Bersedia'])) . "'>" . $row['konfirmasiKehadiran'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'lolos', 'tidak lolos', 'dlm proses', 'tdk psikotest'])) . "'>" . $row['rating_psikotest'] . "</td>";
                    echo "<td class='editable-text'>" . $row['keterangan_psikotest'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Sudah', 'Belum'])) . "'>" . $row['pengumuman_psikotest'] . "</td>";
                    // Akhir Psikotest

                    // Indepth
                    echo "<td class='editable-date'>" . $row['tanggalIndepth'] . "</td>";
                    echo "<td class='editable-time'>" . (isset($row['jam_indepth']) ? date('H:i', strtotime($row['jam_indepth'])) : '') . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Bersedia', 'Tidak Bersedia', 'Reschedule'])) . "'>" . $row['konfirmasiKehadiran_in'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['KTB'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['KPR'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['Siker'] . "</td>";
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
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'lolos', 'tidak lolos', 'blm dijadwalkan'])) . "'>" . $row['hasilIndepth'] . "</td>";
                    echo "<td class='editable-text'>" . $row['keterangan_in'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Sudah', 'Belum'])) . "'>" . $row['pengumuman_in'] . "</td>";

                    // Akhir Indepth
                    // Test Bidang
                    echo "<td class='editable-date'>" . $row['tanggalTesBidang'] . "</td>";
                    echo "<td class='editable-time'>" . (isset($row['jam_tb']) ? date('H:i', strtotime($row['jam_tb'])) : '') . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'bersedia', 'tidak bersedia', 'reschedule'])) . "'>" . $row['konfirmasi_kehadiran_tb'] . "</td>";
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
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Lolos', 'tidak lolos'])) . "'>" . $row['hasil_tb'] . "</td>";
                    echo "<td class='editable-text'>" . $row['keterangan_tb'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Sudah', 'Belum'])) . "'>" . $row['pengumuman_tb'] . "</td>";
                    // Akhir Test Bidang
                    // Interview User
                    echo "<td class='editable-date'>" . $row['tanggalInterviewUser'] . "</td>";
                    echo "<td class='editable-time'>" . (isset($row['jam_iu']) ? date('H:i', strtotime($row['jam_iu'])) : '') . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Bersedia', 'Tidak Bersedia', 'Reschedule'])) . "'>" . $row['konfirmasiKehadiran_iu'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['dt'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['ka'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['pm'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['pd'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['bd'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['ktb'] . "</td>";
                    echo "<td class='editable-text'>" . $row['interviewer_iu'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'lolos', 'tidak lolos', 'blm dijadwalkan'])) . "'>" . $row['hasil_iu'] . "</td>";
                    echo "<td class='editable-text'>" . $row['keterangan_iu'] . "</td>";
                    echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Sudah', 'Belum'])) . "'>" . $row['pengumuman_iu'] . "</td>";


                    // Akhir Interview User
                    // Hasil akhir
                    // echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Proses', 'Lolos', 'Tidak Lolos'])) . "'>" . $row['hasil_akhir'] . "</td>";
                    ?>

                    <td>
                        <?php
                        $stages = [
                            'iu' => ['result' => $row['hasil_iu']],
                            'tb' => ['result' => $row['hasil_tb']],
                            'indepth' => ['result' => $row['hasilIndepth']],
                            'psikotest' => ['result' => $row['rating_psikotest']],
                            'wii' => ['result' => $row['rating_wii']],
                            'administrasi' => ['result' => $row['hasil_seleksi_adm']],
                        ];

                        foreach ($stages as $stage => $data) {
                            // Check if the result is not null or empty
                            if (!empty($data['result'])) {
                                // Check if the result is "lolos"
                                if ($data['result'] == 'lolos') {
                                    // echo $stage . ' lolos';
                                } else {
                                    // Specific messages based on the stage
                                    if ($stage == 'administrasi') {
                                        if ($row['nilai_cv'] === '0') {
                                            echo ' CV, ';
                                        }
                                        if ($row['nilai_kualifikasi'] === '0') {
                                            echo ' Kualifikasi, ';
                                        }
                                        if ($row['nilai_pengalaman'] === '0') {
                                            echo ' Pengalaman, ';
                                        }
                                    } elseif ($stage == 'wii') {
                                        if ($row['p'] === '0') {
                                            echo 'Percaya Diri, ';
                                        }
                                        if ($row['a'] === '0') {
                                            echo 'Antusias, ';
                                        }
                                        if ($row['k'] === '0') {
                                            echo 'Komunikasi, ';
                                        }
                                        if ($row['r'] === '0') {
                                            echo 'Keramahan, ';
                                        }
                                        // Add conditions for the 'psikotest' stage
                                    } elseif ($stage == 'psikotest') {
                                        echo 'Psikotest, ';
                                    } elseif ($stage == 'indepth') {
                                        if ($row['KTB'] === '0') {
                                            echo 'Kemampuan Teknis Bidang, ';
                                        }
                                        if ($row['KPR'] === '0') {
                                            echo 'Kepribadian, ';
                                        }
                                        if ($row['Siker'] === '0') {
                                            echo 'Sikap Kerja, ';
                                        }
                                    } elseif ($stage == 'tb') {

                                        echo 'Tes Bidang, ';
                                    } elseif ($stage == 'iu') {
                                        if ($row['dt'] === '0') {
                                            echo 'Daya Tangkap, ';
                                        }
                                        if ($row['ka'] === '0') {
                                            echo 'Kemampuan Analisa, ';
                                        }
                                        if ($row['pm'] === '0') {
                                            echo 'Pemecahan Masalah, ';
                                        }
                                        if ($row['pd'] === '0') {
                                            echo 'Kepercayaan Diri, ';
                                        }
                                        if ($row['bd'] === '0') {
                                            echo 'Pembawaan Diri, ';
                                        }
                                        if ($row['ktb'] === '0') {
                                            echo 'Kemampuan Teknis Bidang, ';
                                        }
                                    }


                                    // Remove the trailing comma and space
                                    echo rtrim(', ', ', ');
                                }



                                // Break the loop after processing one stage
                                break;
                            }
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

            // Automatically close the page after 3 seconds
            setTimeout(function() {
                window.close();
            }, 1000);
        }

        // Automatically trigger the export function when the page is loaded
        document.addEventListener('DOMContentLoaded', exportToExcel);
    </script>


</body>

</html>