<?php
$page = 'proses_rekrut';
include 'komponen/header.php';
include 'komponen/koneksi.php';
?>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->\
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
                        <div class="card">
                            <!-- HTML untuk toast -->
                            <div id="myToast" class="toast" style="display:none;">
                                <div class="toast-header">
                                    <strong class="me-auto">Toast Header</strong>
                                    <button type="button" class="btn-close" onclick="hideToast()"></button>
                                </div>
                                <div class="toast-body" id="toastMessage"></div>
                            </div>

                        </div>

                        <!-- Basic Bootstrap Table -->
                        <div class="card">

                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 ">Proses Rekrutmen Kandidat</h4>
                            </div>


                            <div class="card-body justify-content-center ">
                                <form action="" method="get" class="row">
                                    <div class="form-group col-3">
                                        <label for="start_date">Tanggal Awal Lamaran:</label>
                                        <input type="date" id="start_date" class="form-control" name="start_date"
                                            value="<?php echo isset($_GET['start_date']) ? $_GET['start_date'] : ''; ?>">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="end_date">Tanggal Akhir Lamaran:</label>
                                        <input type="date" id="end_date" class="form-control" name="end_date"
                                            value="<?php echo isset($_GET['end_date']) ? $_GET['end_date'] : ''; ?>">
                                    </div>

                                    <div class="form-group col-3">
                                        <button type="submit" class="btn btn-primary mt-4 w-100">Cari</button>
                                    </div>

                                </form>
                            </div>

                            <div class="card-body d-flex justify-content-center">
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <button type="button" class="btn btn-outline-primary" id="editButton"
                                        data-bs-toggle="modal" data-bs-target="#editModal">Administrasi</button>
                                    <button type="button" class="btn btn-outline-primary"
                                        id="editButtonWII">WII</button>

                                    <button type="button" class="btn btn-outline-primary"
                                        id="editButtonPsikotest">Psikotest</button>
                                    <button type="button" class="btn btn-outline-primary"
                                        id="editButtonInDepth">Indepth</button>
                                    <button type="button" class="btn btn-outline-primary" id="editButtonTesBidang">Tes
                                        Bidang</button>
                                    <button type="button" class="btn btn-outline-primary"
                                        id="editButtonInterviewUser">Interview User</button>
                                    <button type="button" class="btn btn-outline-primary"
                                        id="editButtonHasilAkhir">Hasil Akhir</button>
                                </div>

                            </div>
                            <div class="card-body table-responsive">

                                <table id="deviceTable" class="table display table-sm table-bordered table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th colspan="5"></th>
                                            <th colspan="6" class="table-warning">Administrasi</th>
                                            <th colspan="9" class="table-info">WII</th>
                                            <th colspan="5" class="table-success">Psikotest</th>
                                            <th colspan="9" class="table-danger">Indepth</th>
                                            <th colspan="9" class="table-primary">Tes Bidang</th>
                                            <th colspan="12" class="table-warning">Interview User</th>
                                            <th colspan="4"></th>
                                        </tr>
                                        <tr class="text-center fw-bold">
                                            <th><input type="checkbox" id="select-all"></th>
                                            <th class="table-danger">Aksi</th>
                                            <th class="table-primary">Tanggal Daftar</th>
                                            <th class="table-primary">ID Pelamar</th>
                                            <th class="table-primary">Nama Lengkap</th>
                                            <!-- Administrasi -->
                                            <th class="table-warning not-editable">Dokumen</th>
                                            <th class="table-warning editable-combobox">Nilai CV</th>
                                            <th class="table-warning editable-combobox">Nilai Kualifikasi</th>
                                            <th class="table-warning editable-combobox">Nilai Pengalaman</th>
                                            <th class="table-warning not-editable">Hasil</th>
                                            <th class="table-warning">Keterangan</th>


                                            <!-- Akhir Administrasi -->
                                            <!-- WII -->
                                            <th class="table-info">Waktu WII</th>
                                            <th class="table-info">Konfirmasi</th>
                                            <th class="table-info">P</th>
                                            <th class="table-info">A</th>
                                            <th class="table-info">K</th>
                                            <th class="table-info">R</th>
                                            <th class="table-info">Interviewer</th>
                                            <th class="table-info">Rating</th>
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
                                            <th class="table-danger">Keterangan</th>
                                            <th class="table-danger">Interviewer Indepth</th>
                                            <th class="table-danger">Pengumuman Indepth</th>
                                            <th class="table-danger">Hasil Indepth</th>
                                            <!-- Akhir Indepth -->
                                            <!-- Tes Bidang -->
                                            <th class="table-primary">Tanggal Tes Bidang</th>
                                            <th class="table-primary">Konfirmasi Kehadiran Tes Bidang</th>
                                            <th class="table-primary">Nilai TB 1</th>
                                            <th class="table-primary">Korektor 1</th>
                                            <th class="table-primary">Nilai TBg 2</th>
                                            <th class="table-primary">Korektor 2</th>
                                            <th class="table-primary">Hasil TB</th>
                                            <th class="table-primary">Keterangan</th>
                                            <th class="table-primary">Pengumuman</th>
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
                                            <th class="table-warning">Hasil</th>
                                            <th class="table-warning">Keterangan</th>
                                            <th class="table-warning">Interviewer</th>
                                            <th class="table-warning">Pengumuman</th>
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
                                                LEFT JOIN seleksi_administrasi sa ON  pl.id = sa.id_pelamar
                                                LEFT JOIN seleksi_wii sw ON pl.id = sw.id_pelamar
                                                LEFT JOIN seleksi_psikotest sp ON pl.id = sp.id_pelamar
                                                LEFT JOIN seleksi_indepth si ON pl.id = si.id_pelamar
                                                LEFT JOIN seleksi_tesbidang st ON pl.id = st.id_pelamar
                                                LEFT JOIN seleksi_interviewuser sin ON pl.id = sin.id_pelamar
                                                LEFT JOIN pelamar_lolos pls ON pl.id = pls.id_pelamar";

                                        // Periksa apakah ada filter tanggal yang disetel
                                        if (isset($_GET['start_date']) && isset($_GET['end_date']) && $_GET['start_date'] != '' && $_GET['end_date'] != '') {
                                            $start_date = $_GET['start_date'];
                                            $end_date = $_GET['end_date'];

                                            // Tambahkan kondisi tanggal ke query SQL
                                            $sql .= " WHERE pl.time BETWEEN '$start_date' AND '$end_date'";
                                        }

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {

                                                $tes = ($row['status'] == 1 ? 'text-danger' : '');
                                                echo "<tr>";
                                                echo "<td class='not-editable'><input type='checkbox' class='select-checkbox' data-id='" . $row['id'] . "'></td>";
                                                echo "<td class='not-editable'><a href='edit_rekrutmen.php?id_pelamar=" . $row['id'] . "' class='btn btn-danger btn-sm'><i class='bx bx-edit-alt'></i></a></td>";
                                                echo "<td class='not-editable'>" . date('Y-m-d', strtotime($row['time'])) . "</td>";
                                                echo "<td class='$tes not-editable'>" . $row['id'] . "</td>";
                                                echo "<td class='$tes not-editable'>" . $row['nama_lengkap'] . "</td>";

                                                // Administrasi
                                                echo "<td class='not-editable'><a href='" . $row['dokumen'] . "' target='_blank'>Lihat</a></td>";
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

                                                    if ($interviewer['id_int'] == $interviewer_id) {
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
                                                echo "<td class='editable-datetime'></td>";
                                                echo "<td class='editable-text'>" . $row['nilaiTesBidang1'] . "</td>";

                                                $interviewer_id = $row['korektor1'];
                                                $sql_interviewer = "SELECT id_int, nama_int FROM interviewer";
                                                $result_interviewer = $conn->query($sql_interviewer);

                                                $listOfInterviewers1 = [];
                                                $defaultValue1 = '-';

                                                while ($interviewer = $result_interviewer->fetch_assoc()) {
                                                    $listOfInterviewers1[] = $interviewer['nama_int'];

                                                    if ($interviewer['id_int'] == $interviewer_id) {
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

                                                    if ($interviewer['id_int'] == $interviewer_id) {
                                                        $defaultValue2 = $interviewer['nama_int'];
                                                    }
                                                }

                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode($listOfInterviewers2)) . "'>" . $defaultValue2 . "</td>";


                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Pilih', 'Lolos', 'Tidak Lolos'])) . "'>" . $row['hasil_tb'] . "</td>";

                                                echo "<td class='editable-text'>" . $row['keterangan_tb'] . "</td>";

                                                echo "<td class='editable-combobox' data-options='" . htmlspecialchars(json_encode(['Pilih', 'Sudah', 'Belum'])) . "'>" . $row['pengumuman_tb'] . "</td>";

                                                // Akhir Test Bidang
                                                // Interview User
                                                echo "<td>" . $row['tanggalInterviewUser'] . "</td>";
                                                echo "<td>" . $row['konfirmasiKehadiran_iu'] . "</td>";
                                                echo "<td>" . $row['dt'] . "</td>";
                                                echo "<td>" . $row['ka'] . "</td>";
                                                echo "<td>" . $row['pm'] . "</td>";
                                                echo "<td>" . $row['pd'] . "</td>";
                                                echo "<td>" . $row['bd'] . "</td>";
                                                echo "<td>" . $row['ktb'] . "</td>";

                                                echo "<td>" . $row['hasil_iu'] . "</td>";
                                                echo "<td>" . $row['keterangan_iu'] . "</td>";

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

                                                echo "<td>" . $interviewer_names_string . "</td>";

                                                echo "<td>" . $row['pengumuman_iu'] . "</td>";
                                                // Akhir Interview User
                                                // Alasan
                                                echo "<td>" . $row['hasil_akhir'] . "</td>";
                                                echo "<td>" . $row['alasan_tidak_lolos'] . "</td>";
                                                // Akhir Alasan
                                                // Etc
                                                echo "<td>" . $row['spkwt'] . "</td>";
                                                echo "<td>" . $row['onboard'] . "</td>";
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
                    <div class="modal fade" id="editModalWII" tabindex="-1" aria-labelledby="editModalWiiLabel"
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
                    <!-- Modal for Edit Form InDepth -->
                    <div class="modal fade" id="editModalInDepth" tabindex="-1" aria-labelledby="editModalInDepthLabel"
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
                    <!-- Modal for Edit Form Hasil Akhir -->
                    <div class="modal fade" id="editModalHasilAkhir" tabindex="-1"
                        aria-labelledby="editModalHasilAkhirLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalHasilAkhirLabel">Edit Hasil Akhir</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Adjust the form fields and IDs based on your actual structure -->
                                    <?php include_once 'modal/modal_hasil_akhir.php'; ?>
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
    <!-- / Layout wrapper -->
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

    <!-- Time -->
    <script src="scripts/time.js"></script>




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

    <!-- Add DataTables Editable plugin -->
    <script src="extensions/editable/bootstrap-table-editable.js"></script>

    <script>
        $(document).ready(function () {
            var table = $('#deviceTable').DataTable({
                fixedColumns: {
                    left: 5
                },
                paging: true,
                scrollCollapse: true,
                scrollY: true,
                scrollX: true,
                select: true,
            });


            $('#deviceTable').on('click', 'td.editable-combobox, td.editable-text, td.editable-datetime', function () {
                var cell = $(this);

                // Check if the cell already contains an input, select, or datetime element
                if (!cell.find('input, select, input[type="datetime-local"]').length) {
                    if (cell.hasClass('editable-combobox')) {
                        createComboBox(cell);
                    } else if (cell.hasClass('editable-datetime')) {
                        createDateTimeInput(cell);
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
                    updateDataWII(cell);
                    updateDataPsikotest(cell);
                });

                input.on('keypress', function (e) {
                    if (e.key === 'Enter') {
                        cell.text(input.val());
                        updateData(cell);
                        updateDataWII(cell);
                        updateDataPsikotest(cell);
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
                });

                input.on('keypress', function (e) {
                    if (e.key === 'Enter') {
                        cell.text(input.val());
                        updateData(cell);
                        updateDataWII(cell);
                        updateDataPsikotest(cell);
                    }
                });
            }


            function updateData(cell) {
                var row = cell.closest('tr');
                var idPelamar = row.find('td:eq(3)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server
                var data = {
                    id_pelamar: idPelamar,
                    nilai_cv: row.find('td:eq(6)').text(), // Adjust the column index based on your actual structure
                    nilai_kualifikasi: row.find('td:eq(7)').text(),
                    nilai_pengalaman: row.find('td:eq(8)').text(),
                    hasil_seleksi_adm: row.find('td:eq(9)').text(),
                    keterangan_adm: row.find('td:eq(10)').text()
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

            function updateDataWII(cell) {
                var row = cell.closest('tr');
                var idPelamar = row.find('td:eq(3)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server for WII
                var dataWII = {
                    id_pelamar: idPelamar,
                    waktu_interview: row.find('td:eq(11)').text(), // Adjust the column index based on your actual structure
                    konfirmasi_kehadiran_wii: row.find('td:eq(12)').text(),
                    p: row.find('td:eq(13)').text(),
                    a: row.find('td:eq(14)').text(),
                    k: row.find('td:eq(15)').text(),
                    r: row.find('td:eq(16)').text(),
                    rating_wii: row.find('td:eq(18)').text(),
                    pengumuman_wii: row.find('td:eq(19)').text(),
                    interviewer_wii: row.find('td:eq(17)').text()
                    // Add more fields as needed
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

            function updateDataPsikotest(cell) {
                var row = cell.closest('tr');
                var idPelamar = row.find('td:eq(3)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server for Psikotest
                var dataPsikotest = {
                    id_pelamar: idPelamar,
                    tanggal_psikotest: row.find('td:eq(20)').text(), // Adjust the column index based on your actual structure
                    konfirmasi_kehadiran: row.find('td:eq(21)').text(),
                    rating_psikotest: row.find('td:eq(23)').text(),
                    pengumuman_psikotest: row.find('td:eq(22)').text() // Adjusted column index
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


            // Add a checkbox for row selection
            $('#deviceTable thead tr').first().prepend('<th><input type="checkbox" id="select-all"></th>');

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
                if (column.index() !== 0) {
                    var select = $('<br><select class="w-100 form-select-sm"><option value=""></option></select>')
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
                    var id = $(this).closest('tr').find('td:eq(3)').text(); // Assuming the ID is in the fourth column
                    selectedIds.push(id);
                });

                if (selectedIds.length > 0) {
                    var selectedIdsString = selectedIds.join(',');

                    $('#selectedIdsInput').val(selectedIdsString);

                    // Dynamically set the value of the 'id_pelamar' input field
                    var idPelamar = <?php echo json_encode($_GET['id_pelamar']); ?>;
                    $('#idPelamarInput').val(idPelamar);

                    $('#editModal').modal('show');
                } else {
                    alert('Please select at least one row to edit.');
                }
            }

            // Event handler for the "Edit" button
            $('#editButton').on('click', function () {
                populateFormFields();
            });

            // Event handler for form submission
            $('#form1').submit(function () {
                // Clear the GET parameters from the URL
                window.history.replaceState({}, document.title, window.location.pathname);

                // Optionally, you can redirect to a new URL after form submission
                // window.location.href = 'new_url.php';
            });
        });
    </script>





</body>

</html>