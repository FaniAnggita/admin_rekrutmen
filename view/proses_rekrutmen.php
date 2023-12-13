<?php
$page = 'proses_rekrut';
include 'komponen/header.php';
include 'komponen/koneksi.php';
?>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php
            include 'komponen/aside.php';
            ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php
                include 'komponen/navbar.php';
                ?>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">

                        <!-- Basic Bootstrap Table -->
                        <div class="card">

                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 ">Proses Rekrutmen Kandidat</h4>
                            </div>


                            <!-- <div class="card-body justify-content-center ">
                               
                            </div> -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="btn-group btn-group-sm" role="group"
                                            aria-label="Basic outlined example">
                                            <button type="button" class="btn btn-outline-primary" id="editButton"
                                                data-bs-toggle="modal" data-bs-target="#editModal">Administrasi</button>
                                            <button type="button" class="btn btn-outline-primary"
                                                id="editButtonWii">WII</button>
                                            <button type="button" class="btn btn-outline-primary"
                                                id="editButtonPsikotest">Psikotest</button>
                                            <button type="button" class="btn btn-outline-primary"
                                                id="editButtonIndepth">Indepth</button>
                                            <button type="button" class="btn btn-outline-primary"
                                                id="editButtonTesBidang">Tes
                                                Bidang</button>
                                            <button type="button" class="btn btn-outline-primary"
                                                id="editButtonInterviewUser">Interview User</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-end">
                                        <?php include_once 'modal/modal_proses_rekrutmen.php'; ?>
                                        <button type="button" class="btn btn-sm btn-primary me-2" data-bs-toggle="modal"
                                            data-bs-target="#modalFilterProses">
                                            <i class="fa-solid fa-filter"></i> Filter
                                        </button>
                                        <a href="../controller/cetak_laporan_rekrutmen.php"
                                            class="btn btn-sm btn-danger " target="_blank">
                                            <i class="fa-solid fa-print"></i> Export
                                        </a>

                                    </div>

                                </div>
                                <!-- Button trigger modal -->

                            </div>


                            <div class="card-body table-responsive">

                                <table id="deviceTable" class="table display table-sm table-bordered table-striped">
                                    <thead>
                                        <tr style="font-size: 12px;">
                                            <th colspan="7"></th>
                                            <th colspan="7" class="table-warning text-center">Administrasi</th>
                                            <th colspan="11" class="table-info text-center">WII</th>
                                            <th colspan="4" class="table-success text-center">Psikotest</th>
                                            <th colspan="9" class="table-danger text-center">Indepth</th>
                                            <th colspan="9" class="table-primary text-center">Tes Bidang</th>
                                            <th colspan="12" class="table-warning text-center">Interview User</th>
                                            <th colspan="4"></th>
                                        </tr>
                                        <tr class="text-center" style="font-size: 12px;">
                                            <th><input type="checkbox" id="select-all"></th>
                                            <th class="table-danger"></th>
                                            <th class="table-primary">Tgl. Daftar</th>
                                            <th class="table-primary">Kd. Ps</th>
                                            <th class="table-primary">Pos. Refer</th>
                                            <th class="table-primary">Kd. Plmr</th>
                                            <th class="table-primary">Nama</th>
                                            <!-- Administrasi -->
                                            <th class="table-warning">Tgl. Adm</th>
                                            <th class="table-warning">Dokumen</th>
                                            <th class="table-warning" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Nilai CV">CV</th>
                                            <th class="table-warning" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Nilai kualifikasi">Klf</th>
                                            <th class="table-warning" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Nilai Pengalaman">Pgl</th>
                                            <th class="table-warning not-editable" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="Hasil Seleksi Administrasi">Hasil
                                            </th>
                                            <th class="table-warning" data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Keterangan Seleksi Administrasi">Keterangan</th>
                                            <!-- Akhir Administrasi -->
                                            <!-- WII -->
                                            <th class="table-info" class="table-warning" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="Keterangan WII">Waktu WII</th>
                                            <th class="table-info" data-bs-title="Konfirmasi WII">Konfirmasi</th>
                                            <th class="table-info" data-bs-title="Pakar">P</th>
                                            <th class="table-info" data-bs-title="Antusias">A</th>
                                            <th class="table-info">K</th>
                                            <th class="table-info">R</th>
                                            <th class="table-info">Platform Loker</th>
                                            <th class="table-info">Akun Platform</th>
                                            <th class="table-info">Interviewer</th>
                                            <th class="table-info">Hasil</th>
                                            <th class="table-info">Pengumuman</th>
                                            <!-- Akhir WII -->
                                            <!-- Psikotest -->
                                            <th class="table-success">Tanggal Psikotest</th>
                                            <th class="table-success">Konfirmasi Kehadiran</th>
                                            <th class="table-success">Pengumuman</th>
                                            <th class="table-success">Hasil Psikotest</th>
                                            <!-- Akhr Psikotest -->
                                            <!-- Indepth -->
                                            <th class="table-danger">Tanggal Indepth</th>
                                            <th class="table-danger">Konfirmasi Kehadiran</th>
                                            <th class="table-danger">KTB</th>
                                            <th class="table-danger">KPR</th>
                                            <th class="table-danger">SiKer</th>
                                            <th class="table-danger">Interviewer Indepth</th>
                                            <th class="table-danger">Pengumuman Indepth</th>
                                            <th class="table-danger">Keterangan</th>
                                            <th class="table-danger">Hasil Indepth</th>
                                            <!-- Akhir Indepth -->
                                            <!-- Tes Bidang -->
                                            <th class="table-primary">Tanggal Tes Bidang</th>
                                            <th class="table-primary">Konfirmasi Kehadiran Tes Bidang</th>
                                            <th class="table-primary">Nilai TB 1</th>
                                            <th class="table-primary">Korektor 1</th>
                                            <th class="table-primary">Nilai TBg 2</th>
                                            <th class="table-primary">Korektor 2</th>
                                            <th class="table-primary">Keterangan</th>
                                            <th class="table-primary">Pengumuman</th>
                                            <th class="table-primary">Hasil TB</th>
                                            <!-- Akhir Tes Bidang -->
                                            <!-- Interview User -->
                                            <th class="table-warning">Tanggal Interview User</th>
                                            <th class="table-warning">Konfirmasi Kehadiran</th>
                                            <th class="table-warning">DT</th>
                                            <th class="table-warning">KA</th>
                                            <th class="table-warning">PM</th>
                                            <th class="table-warning">PD</th>
                                            <th class="table-warning">BD</th>
                                            <th class="table-warning">KTB2</th>
                                            <th class="table-warning">Keterangan</th>
                                            <th class="table-warning">Pengumuman</th>
                                            <th class="table-warning">Interviewer</th>
                                            <th class="table-warning">Hasil</th>
                                            <!-- Akhir Interview User -->
                                            <!-- Hasil Akhir -->
                                            <th class="table-danger">Hasil Akhir</th>
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
                                        if (isset($_POST['start_date']) && isset($_POST['end_date']) && $_POST['start_date'] != '' && $_POST['end_date'] != '') {
                                            $start_date = $_POST['start_date'];
                                            $end_date = $_POST['end_date'];
                                            $status = $_POST['status'];
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
                                                echo "<td class='not-editable'><input type='checkbox' class='select-checkbox' data-id='" . $row['id'] . "' style='position: absolute; z-index: 9;'></td>";
                                                // echo "<td class='not-editable'><a href='edit_rekrutmen.php?id_pelamar=" . $row['id'] . "' class='btn btn-warning btn-sm'><i class='fa-solid fa-envelope'></i></a></td>";
                                                ?>
                                                <td>
                                                    <p>
                                                        <button class="btn btn-danger btn-xs" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#multiCollapseExample2<?php echo $row['id']; ?>"
                                                            aria-expanded="false" aria-controls="multiCollapseExample2"> <i
                                                                class='fa-solid fa-envelope'></i></button>
                                                    </p>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="collapse multi-collapse"
                                                                id="multiCollapseExample2<?php echo $row['id']; ?>">
                                                                <div class="card card-body">
                                                                    <ul>
                                                                        <li><a class="btn"
                                                                                href="../controller/pesan/pesan.php?id='<?php echo $row['kode_pelamar']; ?>' && pesan=wii"
                                                                                target="_blank">WII</a>
                                                                        </li>
                                                                        <li><a class="btn"
                                                                                href="../controller/pesan/pesan.php?id='<?php echo $row['kode_pelamar']; ?>' && pesan=psikotest"
                                                                                target="_blank">Psikotest</a></li>
                                                                        <li><a class="btn"
                                                                                href="../controller/pesan/pesan.php?id='<?php echo $row['kode_pelamar']; ?>' && pesan=indepth"
                                                                                target="_blank">Indepth</a></li>
                                                                        <li><a class="btn"
                                                                                href="../controller/pesan/pesan.php?id='<?php echo $row['kode_pelamar']; ?>' && pesan=tesbidang"
                                                                                target="_blank">Test Bidang</a></li>
                                                                        <li><a class="btn"
                                                                                href="../controller/pesan/pesan.php?id='<?php echo $row['kode_pelamar']; ?>' && pesan=interviewuser"
                                                                                target="_blank">Interview User</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                                <?php
                                                echo "<td class='not-editable'>" . date('Y-m-d', strtotime($row['time'])) . "</td>";
                                                echo "<td class='not-editable'>" . $row['kode_ps'] . "</td>";
                                                echo "<td class='editable-text'>" . $row['refer_posisi'] . "</td>";
                                                echo "<td class='$tes not-editable'>" . $row['kode_pelamar'] . "</td>";
                                                echo "<td class='$tes not-editable'>" . $row['nama_lengkap'] . "</td>";
                                                // Administrasi
                                                echo "<td class='editable-date'>" . $row['tanggal_administrasi'] . "</td>";
                                                echo "<td class='not-editable'><a href='" . $row['dokumen'] . "' target='_blank'>Lihat</a></td>";
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
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'bersedia', 'tidak bersedia', 'reschedule'])) . "'>" . $row['konfirmasiKehadiran_wii'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['p'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['a'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['k'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['r'] . "</td>";
                                                echo "<td class='not-editable'>" . $row['informasi_lowongan'] . "</td>";
                                                echo "<td class='editable-text'>" . $row['akun_platform'] . "</td>";
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
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'sudah', 'belum'])) . "'>" . $row['pengumuman_wii'] . "</td>";
                                                // Akhir WII
                                                // Psikotest
                                                echo "<td class='editable-date'>" . $row['tanggalPsikotest'] . "</td>"; // Use class 'editable-date' for datetime input
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Bersedia', 'Tidak Bersedia'])) . "'>" . $row['konfirmasiKehadiran'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Sudah', 'Belum'])) . "'>" . $row['pengumuman_psikotest'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'lolos', 'tidak lolos', 'dlm proses', 'tdk psikotest'])) . "'>" . $row['rating_psikotest'] . "</td>";
                                                // Akhir Psikotest
                                        
                                                // Indepth
                                                echo "<td class='editable-date'>" . $row['tanggalIndepth'] . "</td>";
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
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Sudah', 'Belum'])) . "'>" . $row['pengumuman_in'] . "</td>";
                                                echo "<td class='editable-text'>" . $row['keterangan_in'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'lolos', 'tidak lolos', 'blm dijadwalkan'])) . "'>" . $row['hasilIndepth'] . "</td>";
                                                // Akhir Indepth
                                                // Test Bidang
                                                echo "<td class='editable-date'>" . $row['tanggalTesBidang'] . "</td>";
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
                                                echo "<td class='editable-text'>" . $row['keterangan_tb'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Sudah', 'Belum'])) . "'>" . $row['pengumuman_tb'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Lolos', 'Tidak Lolos'])) . "'>" . $row['hasil_tb'] . "</td>";
                                                // Akhir Test Bidang
                                                // Interview User
                                                echo "<td class='editable-date'>" . $row['tanggalInterviewUser'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Bersedia', 'Tidak Bersedia', 'Reschedule'])) . "'>" . $row['konfirmasiKehadiran_iu'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['dt'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['ka'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['pm'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['pd'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['bd'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', '1', '0'])) . "'>" . $row['ktb'] . "</td>";
                                                echo "<td class='editable-text'>" . $row['keterangan_iu'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Sudah', 'Belum'])) . "'>" . $row['pengumuman_iu'] . "</td>";
                                                echo "<td>" . $row['interviewer_iu'] . "</td>";
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'lolos', 'tidak lolos', 'blm dijadwalkan'])) . "'>" . $row['hasil_iu'] . "</td>";

                                                // Akhir Interview User
                                                // Hasil akhir
                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['', 'Proses', 'Lolos', 'Tidak Lolos'])) . "'>" . $row['hasil_akhir'] . "</td>";
                                                ?>
                                                <td>
                                                    <?php
                                                    // ...
                                            
                                                    $errorMessages = [];

                                                    if ($row['hasil_akhir'] === 'Tidak Lolos') {
                                                        // Administrasi
                                                        if ($row['hasil_seleksi_adm'] == 'tidak lolos') {
                                                            if ($row['nilai_cv'] === '0') {
                                                                echo 'CV, ';
                                                            }
                                                            if ($row['nilai_kualifikasi'] === '0') {
                                                                echo 'Kualifikasi, ';
                                                            }
                                                            if ($row['nilai_pengalaman'] === '0') {
                                                                echo 'Pengalaman, ';
                                                            }
                                                        }

                                                        // WII
                                                        if ($row['rating_wii'] == 'tidak lolos') {
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
                                                        }

                                                        // Psikotest
                                                        if ($row['rating_psikotest'] == 'tidak lolos') {
                                                            echo 'Psikotest, ';
                                                        }

                                                        // Indepth
                                                        if ($row['hasilIndepth'] == 'tidak lolos') {
                                                            if ($row['KTB'] === '0') {
                                                                echo 'Kemampuan Teknis Bidang, ';
                                                            }
                                                            if ($row['KPR'] === '0') {
                                                                echo 'Kepribadian, ';
                                                            }
                                                            if ($row['Siker'] === '0') {
                                                                echo 'Sikap Kerja, ';
                                                            }
                                                        }

                                                        // Interviewer User
                                                        if ($row['hasil_iu'] == 'tidak lolos') {
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
                                                    }

                                                    // Remove the trailing comma and space
                                                    echo rtrim(', ', ', ');
                                                    // ...
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
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <!-- Modal for Edit Form ADM -->
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Edit Administrasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php include_once 'modal/modal_adm.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Edit Form WII -->
                    <div class="modal fade" id="editModalWii" tabindex="-1" aria-labelledby="editModalWiiLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalWiiLabel">Edit WII</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php include_once 'modal/modal_wii.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Edit Form Psikotest -->
                    <div class="modal fade" id="editModalPsikotest" tabindex="-1"
                        aria-labelledby="editModalPsikotestLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalPsikotestLabel">Edit Psikotest</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php include_once 'modal/modal_psikotest.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal for Edit Form InDepth -->
                    <div class="modal fade" id="editModalIndepth" tabindex="-1" aria-labelledby="editModalInDepthLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalInDepthLabel">Edit InDepth</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php include_once 'modal/modal_indepth.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal for Edit Form Tes Bidang -->
                    <div class="modal fade" id="editModalTesBidang" tabindex="-1"
                        aria-labelledby="editModalTesBidangLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalTesBidangLabel">Edit Tes Bidang</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php include_once 'modal/modal_tes_bidang.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Edit Form Interview User -->
                    <div class="modal fade" id="editModalInterviewUser" tabindex="-1"
                        aria-labelledby="editModalInterviewUserLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalInterviewUserLabel">Edit Interview User</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php include_once 'modal/modal_interview_user.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Footer -->
                    <?php
                    include 'komponen/footer.php';
                    ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>






    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>


    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Include jQuery (required for DataTables) -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <!-- Include DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script>


    <!-- Add DataTables Editable plugin -->
    <!-- <script src="extensions/editable/bootstrap-table-editable.js"></script> -->
    <!-- Include DataTables Buttons JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <!-- / Layout wrapper -->

    <script>

        $(document).ready(function () {
            var table = $('#deviceTable').DataTable({
                fixedColumns: {
                    left: 7,
                },

                responsive: true,
                paging: true,
                scrollCollapse: true,
                scrollX: true,
                scrollY: 450,
                select: true,
                lengthMenu: [5, 10, 25, 50, 100], // Specify the available page lengths
                pageLength: 10,// Set the initial page length
                orderCellsTop: true,
                autoWidth: true,

            });


            $('#deviceTable').on('click', 'td.editable-combobox, td.editable-text, td.editable-datetime, td.editable-date', function () {
                var cell = $(this);

                // Check if the cell already contains an input, select, or datetime element
                if (!cell.find('input, select, input[type="datetime-local"], input[type="date"]').length) {
                    if (cell.hasClass('editable-combobox')) {
                        createComboBox(cell);
                    } else if (cell.hasClass('editable-datetime')) {
                        createDateTimeInput(cell);
                    } else if (cell.hasClass('editable-date')) {
                        createDateInput(cell);
                    } else {
                        createTextInput(cell);
                    }
                }
            });


            function createComboBox(cell) {
                var content = cell.text().trim();
                var options = JSON.parse(cell.attr('data-options') || '[]');

                cell.html('<select class="form-control"></select>');
                var select = cell.find('select');

                options.forEach(function (option) {
                    var optionElement = $('<option>', {
                        value: option,
                        text: option
                    });

                    if (option === content) {
                        optionElement.attr('selected', 'selected');
                    }

                    select.append(optionElement);
                });

                select.focus();

                select.on('change', function () {
                    cell.text(select.val());
                    updateData(cell);
                    updateDataWII(cell);
                    updateDataPsikotest(cell);
                    updateDataIndepth(cell);
                    updateDataTestBidang(cell);
                    updateDataInterviewUser(cell);
                    updateDataHasilAkhir(cell);
                });
            }

            function createTextInput(cell) {
                var content = cell.text().trim();
                cell.html('<input type="text" class="form-control" value="' + content + '">');

                var input = cell.find('input');
                input.focus();

                input.on('blur', function () {
                    cell.text(input.val());
                    updateData(cell);
                    updateReferPosisi(cell);
                    updateDataWII(cell);
                    updateDataPsikotest(cell);
                    updateDataIndepth(cell);
                    updateDataTestBidang(cell);
                    updateDataInterviewUser(cell);
                    updateDataHasilAkhir(cell);

                });

                input.on('keypress', function (e) {
                    if (e.key === 'Enter') {
                        cell.text(input.val());
                        updateData(cell);
                        updateReferPosisi(cell);
                        updateDataWII(cell);
                        updateDataPsikotest(cell);
                        updateDataIndepth(cell);
                        updateDataTestBidang(cell);
                        updateDataInterviewUser(cell);
                        updateDataHasilAkhir(cell);
                    }
                });
            }

            function createDateTimeInput(cell) {
                var content = cell.text().trim();
                cell.html('<input type="datetime-local" class="form-control" value="' + content + '">');

                var input = cell.find('input');
                input.focus();

                input.on('blur', function () {
                    cell.text(input.val());
                    updateData(cell);
                    updateDataWII(cell);
                    updateDataPsikotest(cell);
                    updateDataIndepth(cell);
                    updateDataTestBidang(cell);
                    updateDataInterviewUser(cell);
                    updateDataHasilAkhir(cell);
                });

                input.on('keypress', function (e) {
                    if (e.key === 'Enter') {
                        cell.text(input.val());
                        updateData(cell);
                        updateDataWII(cell);
                        updateDataPsikotest(cell);
                        updateDataIndepth(cell);
                        updateDataTestBidang(cell);
                        updateDataInterviewUser(cell);
                        updateDataHasilAkhir(cell);
                    }
                });
            }


            function createDateInput(cell) {
                var content = cell.text().trim();
                cell.html('<input type="date" class="form-control" value="' + content + '">');

                var input = cell.find('input');
                input.focus();

                input.on('blur', function () {
                    cell.text(input.val());
                    updateData(cell);
                    updateDataWII(cell);
                    updateDataPsikotest(cell);
                    updateDataIndepth(cell);
                    updateDataTestBidang(cell);
                    updateDataInterviewUser(cell);
                    updateDataHasilAkhir(cell);
                });

                input.on('keypress', function (e) {
                    if (e.key === 'Enter') {
                        cell.text(input.val());
                        updateData(cell);
                        updateDataWII(cell);
                        updateDataPsikotest(cell);
                        updateDataIndepth(cell);
                        updateDataTestBidang(cell);
                        updateDataInterviewUser(cell);
                        updateDataHasilAkhir(cell);
                    }
                });
            }


            // UPdate Administrasi = DONE
            function updateData(cell) {
                var row = cell.closest('tr');
                var idPelamar = row.find('td:eq(5)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server
                var data = {
                    id_pelamar: idPelamar,
                    tanggal_administrasi: row.find('td:eq(7)').text(),
                    nilai_cv: row.find('td:eq(9)').text(), // Adjust the column index based on your actual structure
                    nilai_kualifikasi: row.find('td:eq(10)').text(),
                    nilai_pengalaman: row.find('td:eq(11)').text(),
                    hasil_seleksi_adm: row.find('td:eq(12)').text(),
                    keterangan_adm: row.find('td:eq(13)').text()
                    // Add more fields as needed
                };

                // Send AJAX request to update data on the server
                $.ajax({
                    url: '../controller/edit_administrasi.php', // Replace with the actual path
                    type: 'POST',
                    data: data,
                    success: function (response) {
                        // Handle success
                        console.log(response);
                    },
                    error: function (xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                });
            }

            // UPdate WII = DONE
            function updateReferPosisi(cell) {
                var row = cell.closest('tr');
                var idPelamar = row.find('td:eq(5)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server for WII
                var dataReferPosisi = {
                    id_pelamar: idPelamar,
                    refer_posisi: row.find('td:eq(4)').text(), // Adjust the column index based on your actual structure
                };

                // Send AJAX request to update data on the server for WII
                $.ajax({
                    url: '../controller/edit_refer_posisi.php', // Replace with the actual path for WII
                    type: 'POST',
                    data: dataReferPosisi,
                    success: function (response) {
                        // Handle success
                        console.log(response);
                    },
                    error: function (xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                });
            }
            // UPdate WII = DONE
            function updateDataWII(cell) {
                var row = cell.closest('tr');
                var idPelamar = row.find('td:eq(5)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server for WII
                var dataWII = {
                    id_pelamar: idPelamar,
                    waktu_interview: row.find('td:eq(14)').text(), // Adjust the column index based on your actual structure
                    konfirmasi_kehadiran_wii: row.find('td:eq(15)').text(),
                    p: row.find('td:eq(16)').text(),
                    a: row.find('td:eq(17)').text(),
                    k: row.find('td:eq(18)').text(),
                    r: row.find('td:eq(19)').text(),
                    akun_platform: row.find('td:eq(21)').text(),
                    interviewer_wii: row.find('td:eq(22)').text(),
                    rating_wii: row.find('td:eq(23)').text(),
                    pengumuman_wii: row.find('td:eq(24)').text()

                };

                // Send AJAX request to update data on the server for WII
                $.ajax({
                    url: '../controller/edit_wii.php', // Replace with the actual path for WII
                    type: 'POST',
                    data: dataWII,
                    success: function (response) {
                        // Handle success
                        console.log(response);
                    },
                    error: function (xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                });
            }
            // UPdate WII = DONE
            function updateDataPsikotest(cell) {
                var row = cell.closest('tr');
                var idPelamar = row.find('td:eq(5)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server for Psikotest
                var dataPsikotest = {
                    id_pelamar: idPelamar,
                    tanggal_psikotest: row.find('td:eq(25)').text(), // Adjust the column index based on your actual structure
                    konfirmasi_kehadiran: row.find('td:eq(26)').text(),
                    rating_psikotest: row.find('td:eq(27)').text(),
                    pengumuman_psikotest: row.find('td:eq(28)').text() // Adjusted column index
                    // Add more fields as needed
                };

                // Send AJAX request to update data on the server for Psikotest
                $.ajax({
                    url: '../controller/edit_psikotest.php', // Replace with the actual path for Psikotest
                    type: 'POST',
                    data: dataPsikotest,
                    success: function (response) {
                        // Handle success
                        console.log(response);
                    },
                    error: function (xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                });
            }

            // UPdate Indepth = DONE
            function updateDataIndepth(cell) {
                var row = cell.closest('tr');
                var idPelamar = row.find('td:eq(5)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server for Indepth
                var dataIndepth = {
                    id_pelamar: idPelamar,
                    tanggal_indepth: row.find('td:eq(29)').text(), // Adjust the column index based on your actual structure
                    konfirmasi_kehadiran_in: row.find('td:eq(30)').text(),
                    KTB: row.find('td:eq(31)').text(),
                    KPR: row.find('td:eq(32)').text(),
                    Siker: row.find('td:eq(33)').text(),
                    interviewer_indepth: row.find('td:eq(34)').text(),
                    pengumuman_in: row.find('td:eq(35)').text(),
                    keterangan_in: row.find('td:eq(36)').text(),
                    hasil_indepth: row.find('td:eq(37)').text()
                };

                // Send AJAX request to update data on the server for Indepth
                $.ajax({
                    url: '../controller/edit_indepth.php', // Replace with the actual path for Indepth
                    type: 'POST',
                    data: dataIndepth,
                    success: function (response) {
                        // Handle success
                        console.log(response);
                    },
                    error: function (xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                });
            }

            // UPdate Tes Bidang = DONE
            function updateDataTestBidang(cell) {
                var row = cell.closest('tr');
                var idPelamar = row.find('td:eq(5)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server for Test Bidang
                var dataTestBidang = {
                    id_pelamar: idPelamar,
                    tanggal_tes_bidang: row.find('td:eq(38)').text(), // Adjust the column index based on your actual structure
                    konfirmasi_kehadiran_tb: row.find('td:eq(39)').text(),
                    nilai_tb1: row.find('td:eq(40)').text(),
                    korektor1: row.find('td:eq(41)').text(),
                    nilai_tb2: row.find('td:eq(42)').text(),
                    korektor2: row.find('td:eq(43)').text(),
                    keterangan: row.find('td:eq(44)').text(),
                    pengumuman: row.find('td:eq(45)').text(),
                    hasil: row.find('td:eq(46)').text(),
                };

                // Send AJAX request to update data on the server for Test Bidang
                $.ajax({
                    url: '../controller/edit_tesBidang.php', // Replace with the actual path for Test Bidang
                    type: 'POST',
                    data: dataTestBidang,
                    success: function (response) {
                        // Handle success
                        console.log(response);
                    },
                    error: function (xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                });
            }

            // UPdate Interview User = DONE
            function updateDataInterviewUser(cell) {
                var row = cell.closest('tr');
                var idPelamar = row.find('td:eq(5)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server for Interview User
                var dataInterviewUser = {
                    id_pelamar: idPelamar,
                    tanggal_interview_user: row.find('td:eq(47)').text(), // Adjust the column index based on your actual structure
                    konfirmasi_kehadiran_iu: row.find('td:eq(48)').text(),
                    dt: row.find('td:eq(49)').text(),
                    ka: row.find('td:eq(50)').text(),
                    pm: row.find('td:eq(51)').text(),
                    pd: row.find('td:eq(52)').text(),
                    bd: row.find('td:eq(53)').text(),
                    ktb: row.find('td:eq(54)').text(),
                    keterangan_iu: row.find('td:eq(55)').text(),
                    pengumuman_iu: row.find('td:eq(56)').text(),
                    interviewer_iu: row.find('td:eq(57)').text(),
                    hasil_iu: row.find('td:eq(58)').text(),
                    // Add more fields as needed
                };

                // Send AJAX request to update data on the server for Interview User
                $.ajax({
                    url: '../controller/edit_interview_user.php', // Replace with the actual path for Interview User
                    type: 'POST',
                    data: dataInterviewUser,
                    success: function (response) {
                        // Handle success
                        console.log(response);
                    },
                    error: function (xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                });
            }

            // UPdate hasil akhir = DONE
            function updateDataHasilAkhir(cell) {
                var row = cell.closest('tr');
                var idPelamar = row.find('td:eq(5)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server for Hasil Akhir
                var dataHasilAkhir = {
                    id_pelamar: idPelamar,
                    hasil_akhir: row.find('td:eq(59)').text(), // Adjust the column index based on your actual structure
                    alasan_tidak_lolos: row.find('td:eq(60)').text(), // Adjust the column index based on your actual structure
                    spkwt: row.find('td:eq(61)').text(), // Adjust the column index based on your actual structure
                    onboard: row.find('td:eq(62)').text(), // Adjust the column index based on your actual structure
                    // Add more fields as needed
                };

                // Send AJAX request to update data on the server for Hasil Akhir
                $.ajax({
                    url: '../controller/edit_hasilAkhir.php', // Replace with the actual path for Hasil Akhir
                    type: 'POST',
                    data: dataHasilAkhir,
                    success: function (response) {
                        // Handle success
                        console.log(response);

                        // You can add additional logic here if needed
                    },
                    error: function (xhr, status, error) {
                        // Handle error
                        console.error(error);
                    }
                });
            }



            // // Add a checkbox for row selection
            // $('#deviceTable thead tr').first().prepend('<th><input type="checkbox" id="select-all"></th>');

            // Handle row selection
            $('#deviceTable tbody').on('click', '.select-checkbox', function () {
                $(this).toggleClass('selected');
            });

            // Handle "Select All" checkbox
            $('#select-all').on('click', function () {
                var rows = table.rows({ page: 'current' }).nodes();
                $(':checkbox', rows).prop('checked', this.checked).toggleClass('selected', this.checked);
            });

            // Create select inputs for each column
            table.columns().every(function () {
                var column = this;
                if (column.index() !== 0 && column.index() !== 1) {
                    var select = $('<br><select class="w-100 form-control form-control-sm"><option value=""></option></select>')
                        .appendTo($(column.header()))
                        .on('change', function () {
                            var val = $.fn.dataTable.util.escapeRegex($(this).val());
                            column.search(val ? '^' + val + '$' : '', true, false).draw();
                        });

                    column.data().unique().sort().each(function (d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>');
                    });
                }
            });


        });
    </script>

    <script>
        $(document).ready(function () {
            // Function to populate form fields based on the selected IDs
            function populateFormFields() {
                var selectedIds = [];
                $('.select-checkbox:checked').each(function () {
                    var id = $(this).closest('tr').find('td:eq(5)').text(); // Assuming the ID is in the fourth column
                    selectedIds.push(id);
                });

                if (selectedIds.length > 0) {
                    var selectedIdsString = selectedIds.join(',');

                    $('#selectedIdsInput').val(selectedIdsString);


                    $('#idPelamarInput').val(idPelamar);

                    $('#editModal').modal('show');
                } else {

                    alert('Please select at least one row to edit.');
                }
            }

            $('#editButton').on('click', function () {
                populateFormFields();
            });

            function populateFormWii() {
                var selectedIds = [];
                $('.select-checkbox:checked').each(function () {
                    var id = $(this).closest('tr').find('td:eq(5)').text(); // Assuming the ID is in the fourth column
                    selectedIds.push(id);
                });

                if (selectedIds.length > 0) {
                    var selectedIdsString = selectedIds.join(',');

                    $('#selectedIdsInputWii').val(selectedIdsString);



                    $('#editModalWii').modal('show');
                } else {

                    alert('Please select at least one row to edit.');
                }
            }

            // Event handler for the "Edit" button


            $('#editButtonWii').on('click', function () {
                populateFormWii();
            });

            function populateFormPsikotest() {
                var selectedIds = [];
                $('.select-checkbox:checked').each(function () {
                    var id = $(this).closest('tr').find('td:eq(5)').text(); // Assuming the ID is in the fourth column
                    selectedIds.push(id);
                });

                if (selectedIds.length > 0) {
                    var selectedIdsString = selectedIds.join(',');

                    $('#selectedIdsInputPsikotest').val(selectedIdsString);



                    $('#editModalPsikotest').modal('show');
                } else {

                    alert('Please select at least one row to edit.');
                }
            }

            // Event handler for the "Edit" button
            $('#editButtonPsikotest').on('click', function () {
                populateFormPsikotest();
            });

            function populateFormIndepth() {
                var selectedIds = [];
                $('.select-checkbox:checked').each(function () {
                    var id = $(this).closest('tr').find('td:eq(5)').text(); // Assuming the ID is in the fourth column
                    selectedIds.push(id);
                });

                if (selectedIds.length > 0) {
                    var selectedIdsString = selectedIds.join(',');

                    $('#selectedIdsInputIndepth').val(selectedIdsString);



                    $('#editModalIndepth').modal('show');
                } else {
                    alert('Please select at least one row to edit.');
                }
            }

            // Event handler for the "Edit" button


            $('#editButtonIndepth').on('click', function () {
                populateFormIndepth();
            });

            function populateFormTesBidang() {
                var selectedIds = [];
                $('.select-checkbox:checked').each(function () {
                    var id = $(this).closest('tr').find('td:eq(5)').text(); // Assuming the ID is in the fourth column
                    selectedIds.push(id);
                });

                if (selectedIds.length > 0) {
                    var selectedIdsString = selectedIds.join(',');

                    $('#selectedIdsInputTesBidang').val(selectedIdsString);



                    $('#editModalTesBidang').modal('show');
                } else {

                    alert('Please select at least one row to edit.');
                }
            }

            // Event handler for the "Edit" button


            $('#editButtonTesBidang').on('click', function () {
                populateFormTesBidang();
            });

            function populateFormInterviewUser() {
                var selectedIds = [];
                $('.select-checkbox:checked').each(function () {
                    var id = $(this).closest('tr').find('td:eq(5)').text(); // Assuming the ID is in the fourth column
                    selectedIds.push(id);
                });

                if (selectedIds.length > 0) {
                    var selectedIdsString = selectedIds.join(',');

                    $('#selectedIdsInputInterviewUser').val(selectedIdsString);

                    $('#editModalInterviewUser').modal('show');
                } else {

                    alert('Please select at least one row to edit.');
                }
            }

            // Event handler for the "Edit" button
            $('#editButtonInterviewUser').on('click', function () {
                populateFormInterviewUser();
            });

        });
    </script>
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

    </script>


</body>

</html>