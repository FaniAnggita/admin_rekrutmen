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
                                        <button type="submit" class="btn btn-primary mt-4 w-1200">Cari</button>
                                    </div>

                                </form>
                            </div>

                            <div class="card-body d-flex justify-content-center">
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <button type="button" class="btn btn-outline-primary"
                                        id="editButton">Administrasi</button>
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
                                            <!--    Administrasi -->
                                            <th class="table-warning">Dokumen</th>
                                            <th class="table-warning">Nilai CV</th>
                                            <th class="table-warning">Nilai Kualifikasi</th>
                                            <th class="table-warning">Nilai Pengalaman</th>
                                            <th class="table-warning">Hasil</th>
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
                                            <th class="table-success">Hasil Psikotest</th>
                                            <th class="table-success">Keterangan</th>
                                            <th class="table-success">Pengumuman</th>
                                            <!-- Akhr Psikotest -->
                                            <!-- Indepth -->
                                            <th class="table-danger">Tanggal Indepth</th>
                                            <th class="table-danger">Konfirmasi Kehadiran</th>
                                            <th class="table-danger">KTB</th>
                                            <th class="table-danger">KPR</th>
                                            <th class="table-danger">SiKer</th>
                                            <th class="table-danger">Hasil Indepth</th>
                                            <th class="table-danger">Keterangan</th>
                                            <th class="table-danger">Interviewer Indepth</th>
                                            <th class="table-danger">Pengumuman Indepth</th>
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
                                                echo "<td><input type='checkbox' class='select-checkbox' data-id='" . $row['id'] . "'></td>";
                                                echo "<td><a href='edit_rekrutmen.php?id_pelamar=" . $row['id'] . "' class='btn btn-danger btn-sm'><i class='bx bx-edit-alt'></i></a></td>";
                                                echo "<td>" . date('Y-m-d', strtotime($row['time'])) . "</td>";
                                                echo "<td class='$tes'>" . $row['id'] . "</td>";
                                                echo "<td class='$tes'>" . $row['nama_lengkap'] . "</td>";

                                                // Administrasi
                                                echo "<td><a href='" . $row['dokumen'] . "' target='_blank'>Lihat</a></td>";
                                                echo "<td>" . $row['nilai_cv'] . "</td>";
                                                echo "<td>" . $row['nilai_kualifikasi'] . "</td>";
                                                echo "<td>" . $row['nilai_pengalaman'] . "</td>";
                                                echo "<td>" . $row['hasil_seleksi_adm'] . "</td>";
                                                echo "<td>" . $row['keterangan_adm'] . "</td>";
                                                // Akhir Administrasi
                                                // WII
                                                echo "<td>" . $row['waktuInterview'] . "</td>";
                                                echo "<td>" . $row['konfirmasiKehadiran_wii'] . "</td>";
                                                echo "<td>" . $row['p'] . "</td>";
                                                echo "<td>" . $row['a'] . "</td>";
                                                echo "<td>" . $row['k'] . "</td>";
                                                echo "<td>" . $row['r'] . "</td>";

                                                // Assuming $conn is your database connection
                                                // Assuming $row['interviewer_wii'] contains the ID of the interviewer
                                        
                                                $interviewer_id = $row['interviewer_wii'];
                                                $sql_interviewer = "SELECT id_int, nama_int 
                                                                    FROM interviewer
                                                                    JOIN seleksi_wii ON id_int = interviewer_wii
                                                                    WHERE id_int = '$interviewer_id'";

                                                $result_interviewer = $conn->query($sql_interviewer);

                                                echo "<td>" . ($result_interviewer->num_rows > 0 ? $result_interviewer->fetch_assoc()['nama_int'] : '-') . "</td>";

                                                echo "<td>" . $row['rating_wii'] . "</td>";
                                                echo "<td>" . $row['pengumuman_wii'] . "</td>";
                                                // Akhir WII
                                                // Psikotest
                                                echo "<td>" . $row['tanggalPsikotest'] . "</td>";
                                                echo "<td>" . $row['konfirmasiKehadiran'] . "</td>";
                                                echo "<td> - </td>";
                                                echo "<td>" . $row['rating_psikotest'] . "</td>";
                                                echo "<td>" . $row['pengumuman_psikotest'] . "</td>";
                                                // Akhir Psikotest
                                                // Indepth
                                                echo "<td>" . $row['tanggalIndepth'] . "</td>";
                                                echo "<td>" . $row['konfirmasiKehadiran_in'] . "</td>";
                                                echo "<td>" . $row['KTB'] . "</td>";
                                                echo "<td>" . $row['KPR'] . "</td>";
                                                echo "<td>" . $row['Siker'] . "</td>";
                                                echo "<td>" . $row['hasilIndepth'] . "</td>";
                                                $interviewer_id = $row['interviewerIndepth'];
                                                $sql_interviewer = "SELECT id_int, nama_int 
                                                                    FROM interviewer
                                                                    JOIN seleksi_indepth ON id_int = interviewerIndepth
                                                                    WHERE id_int = '$interviewer_id'";

                                                $result_interviewer = $conn->query($sql_interviewer);

                                                echo "<td>" . ($result_interviewer->num_rows > 0 ? $result_interviewer->fetch_assoc()['nama_int'] : '-') . "</td>";

                                                echo "<td>" . $row['pengumuman_in'] . "</td>";
                                                echo "<td>" . $row['keterangan_in'] . "</td>";
                                                // Akhir Indepth
                                                // Test Bidang
                                                echo "<td>" . $row['tanggalTesBidang'] . "</td>";
                                                echo "<td> - </td>";
                                                echo "<td>" . $row['nilaiTesBidang1'] . "</td>";

                                                $interviewer_id = $row['korektor1'];
                                                $sql_interviewer = "SELECT id_int, nama_int 
                                                                    FROM interviewer
                                                                    JOIN seleksi_tesbidang ON id_int = korektor1
                                                                    WHERE id_int = '$interviewer_id'";

                                                $result_interviewer = $conn->query($sql_interviewer);

                                                echo "<td>" . ($result_interviewer->num_rows > 0 ? $result_interviewer->fetch_assoc()['nama_int'] : '-') . "</td>";

                                                echo "<td>" . $row['nilaiTesBidang2'] . "</td>";
                                                $interviewer_id = $row['korektor2'];
                                                $sql_interviewer = "SELECT id_int, nama_int 
                                                                    FROM interviewer
                                                                    JOIN seleksi_tesbidang ON id_int = korektor2
                                                                    WHERE id_int = '$interviewer_id'";

                                                $result_interviewer = $conn->query($sql_interviewer);

                                                echo "<td>" . ($result_interviewer->num_rows > 0 ? $result_interviewer->fetch_assoc()['nama_int'] : '-') . "</td>";

                                                echo "<td>" . $row['hasil_tb'] . "</td>";
                                                echo "<td>" . $row['keterangan_tb'] . "</td>";
                                                echo "<td>" . $row['pengumuman_tb'] . "</td>";
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
                    var select = $('<br><select class="w-1200 form-select-sm"><option value=""></option></select>')
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

            // Function to populate form fields based on the selected ID
            function populateFormFields(selectedId) {
                // Find the selected row based on the ID
                var selectedRow = $('td:contains(' + selectedId + ')').closest('tr');

                // Extract values from the selected row
                var tanggalseleksi = selectedRow.find('td:eq(2)').text(); // Assuming the date is in the third column
                var nilaiCv = parseInt(selectedRow.find('td:eq(6)').text(), 10);
                var nilaiKualifikasi = parseInt(selectedRow.find('td:eq(7)').text(), 10);
                var nilaiPengalaman = parseInt(selectedRow.find('td:eq(8)').text(), 10);
                var hasil = selectedRow.find('td:eq(9)').text(); // Assuming Hasil is in the tenth column
                var keterangan = selectedRow.find('td:eq(10)').text(); // Assuming Keterangan is in the eleventh column

                // Populate form fields with extracted values
                $('#selectedIdsInput').val(selectedId); // Add this line to set the selected ID
                $('#tanggalseleksi').val(tanggalseleksi);
                $('#nilaiCv').val(nilaiCv);
                $('#nilaiKualifikasi').val(nilaiKualifikasi);
                $('#nilaiPengalaman').val(nilaiPengalaman);
                $('#hasil').val(hasil);
                $('#keterangan').val(keterangan);

                // Trigger the modal display
                $('#editModal').modal('show');
            }

            // Handle "Edit" button click
            $('#editButton').on('click', function () {
                var selectedIds = [];
                $('.select-checkbox:checked').each(function () {
                    var id = $(this).closest('tr').find('td:eq(3)').text(); // Assuming the ID is in the fourth column
                    selectedIds.push(id);
                });

                // Check if any IDs are selected
                if (selectedIds.length > 0) {
                    // If only one ID is selected, populate form fields
                    if (selectedIds.length === 1) {
                        populateFormFields(selectedIds[0]);
                    } else {
                        // If multiple IDs are selected, set only the selected IDs in #selectedIdsInput
                        $('#selectedIdsInput').val(selectedIds.join(', '));

                        // Set default values to empty for other fields
                        $('#tanggalseleksi').val('');
                        $('#nilaiCv').val('');
                        $('#nilaiKualifikasi').val('');
                        $('#nilaiPengalaman').val('');
                        $('#hasil').val('');
                        $('#keterangan').val('');

                        // Trigger the modal display
                        $('#editModal').modal('show');
                    }
                } else {
                    // Show an alert or perform any other action if no IDs are selected
                    alert('Please select at least one row.');
                }
            });


            // Handle popstate event to show the modal when using the back button
            $(window).on('popstate', function () {
                $('#editModal').modal('show');
            });

            // WII
            // Function to populate WII form fields based on the selected ID
            function populateWiiFormFields(selectedId) {
                var selectedRow = $('td:contains(' + selectedId + ')').closest('tr');

                // Extract values from the selected row
                var waktuInterview = selectedRow.find('td:eq(11)').text();
                var konfirmasiKehadiran = selectedRow.find('td:eq(12)').text();
                var p = selectedRow.find('td:eq(13)').text();
                var a = selectedRow.find('td:eq(14)').text();
                var k = selectedRow.find('td:eq(15)').text();
                var r = selectedRow.find('td:eq(16)').text();
                var interviewer = selectedRow.find('td:eq(17)').text();
                var rating = selectedRow.find('td:eq(18)').text();
                var pengumuman = selectedRow.find('td:eq(19)').text();

                // Populate form fields with extracted values
                $('#selectedIdsInputWII').val(selectedId);
                $('#waktuInterview').val(waktuInterview);
                $('#konfirmasiKehadiran').val(konfirmasiKehadiran);
                $('#p').val(p);
                $('#a').val(a);
                $('#k').val(k);
                $('#r').val(r);
                $('#id_int').val(interviewer);
                $('#rating').val(rating);
                $('#pengumuman').val(pengumuman);

                // Trigger the modal display
                $('#editModalWII').modal('show');
            }


            // Handle "Edit" button click for WII form
            $('#editButtonWII').on('click', function () {
                var selectedIds = [];
                $('.select-checkbox:checked').each(function () {
                    var id = $(this).closest('tr').find('td:eq(3)').text();
                    selectedIds.push(id);
                });

                if (selectedIds.length > 0) {
                    if (selectedIds.length === 1) {
                        populateWiiFormFields(selectedIds[0]);
                    } else {
                        $('#selectedIdsInputWII').val(selectedIds.join(', '));
                        $('#waktuInterview').val('');
                        $('#konfirmasiKehadiran').val('');
                        $('#p').val('');
                        $('#a').val('');
                        $('#k').val('');
                        $('#r').val('');
                        $('#id_int').val('');
                        $('#rating').val('');
                        $('#pengumuman').val('');

                        $('#editModalWII').modal('show');
                    }
                } else {
                    alert('Please select at least one row.');
                }
            });

            // Handle popstate event to show the WII modal when using the back button
            $(window).on('popstate', function () {
                $('#editModalWII').modal('show');
            });

            // Psikotest
            // Function to populate Psikotest form fields based on the selected ID
            function populatePsikotestFormFields(selectedId) {
                var selectedRow = $('td:contains(' + selectedId + ')').closest('tr');

                // Extract values from the selected row
                var tanggalPsikotest = selectedRow.find('td:eq(20)').text();
                var konfirmasiKehadiranPsikotest = selectedRow.find('td:eq(21)').text();
                var hasilPsikotest = selectedRow.find('td:eq(22)').text();
                var keteranganPsikotest = selectedRow.find('td:eq(23)').text();
                var pengumumanPsikotest = selectedRow.find('td:eq(24)').text();

                // Populate form fields with extracted values
                $('#tanggalPsikotest').val(tanggalPsikotest);
                $('#konfirmasiKehadiran').val(konfirmasiKehadiranPsikotest);
                $('#hasilPsikotest').val(hasilPsikotest);
                $('#keterangan').val(keteranganPsikotest);
                $('#pengumuman').val(pengumumanPsikotest);

                // Trigger the modal display
                $('#editModalPsikotest').modal('show');
            }

            // Handle "Edit" button click for Psikotest form
            $('#editButtonPsikotest').on('click', function () {
                var selectedIds = [];
                $('.select-checkbox:checked').each(function () {
                    var id = $(this).closest('tr').find('td:eq(3)').text();
                    selectedIds.push(id);
                });

                if (selectedIds.length > 0) {
                    if (selectedIds.length === 1) {
                        populatePsikotestFormFields(selectedIds[0]);
                    } else {
                        $('#selectedIdsInputPsikotest').val(selectedIds.join(', '));
                        $('#tanggalPsikotest').val('');
                        $('#konfirmasiKehadiran').val('');
                        $('#hasilPsikotest').val('');
                        $('#keterangan').val('');
                        $('#pengumuman').val('');

                        $('#editModalPsikotest').modal('show');
                    }
                } else {
                    alert('Please select at least one row.');
                }
            });

            // Handle popstate event to show the Psikotest modal when using the back button
            $(window).on('popstate', function () {
                $('#editModalPsikotest').modal('show');
            });
            // Tes Bidang
            // Function to populate Tes Bidang form fields based on the selected ID
            function populateTesBidangFormFields(selectedId) {
                var selectedRow = $('td:contains(' + selectedId + ')').closest('tr');

                // Extract values from the selected row
                var tanggalTesBidang = selectedRow.find('td:eq(25)').text();
                var konfirmasiKehadiranTesBidang = selectedRow.find('td:eq(26)').text();
                var nilaiTB1 = selectedRow.find('td:eq(27)').text();
                var korektor1 = selectedRow.find('td:eq(28)').text();
                var nilaiTB2 = selectedRow.find('td:eq(29)').text();
                var korektor2 = selectedRow.find('td:eq(30)').text();
                var hasilTB = selectedRow.find('td:eq(31)').text();
                var keteranganTB = selectedRow.find('td:eq(32)').text();
                var pengumumanTB = selectedRow.find('td:eq(33)').text();

                // Populate form fields with extracted values
                $('#tanggalTesBidang').val(tanggalTesBidang);
                $('#konfirmasiKehadiranTesBidang').val(konfirmasiKehadiranTesBidang);
                $('#nilaiTB1').val(nilaiTB1);
                $('#korektor1').val(korektor1);
                $('#nilaiTB2').val(nilaiTB2);
                $('#korektor2').val(korektor2);
                $('#hasilTB').val(hasilTB);
                $('#keteranganTB').val(keteranganTB);
                $('#pengumumanTB').val(pengumumanTB);

                // Trigger the modal display
                $('#editModalTesBidang').modal('show');
            }

            // Handle "Edit" button click for Tes Bidang form
            $('#editButtonTesBidang').on('click', function () {
                var selectedIds = [];
                $('.select-checkbox:checked').each(function () {
                    var id = $(this).closest('tr').find('td:eq(3)').text();
                    selectedIds.push(id);
                });

                if (selectedIds.length > 0) {
                    if (selectedIds.length === 1) {
                        populateTesBidangFormFields(selectedIds[0]);
                    } else {
                        $('#selectedIdsInputTesBidang').val(selectedIds.join(', '));
                        $('#tanggalTesBidang').val('');
                        $('#konfirmasiKehadiranTesBidang').val('');
                        $('#nilaiTB1').val('');
                        $('#korektor1').val('');
                        $('#nilaiTB2').val('');
                        $('#korektor2').val('');
                        $('#hasilTB').val('');
                        $('#keteranganTB').val('');
                        $('#pengumumanTB').val('');

                        $('#editModalTesBidang').modal('show');
                    }
                } else {
                    alert('Please select at least one row.');
                }
            });

            // Handle popstate event to show the Tes Bidang modal when using the back button
            $(window).on('popstate', function () {
                $('#editModalTesBidang').modal('show');
            });

            // InDepth
            // Function to populate InDepth form fields based on the selected ID
            function populateInDepthFormFields(selectedId) {
                var selectedRow = $('td:contains(' + selectedId + ')').closest('tr');

                // Extract values from the selected row
                var tanggalInDepth = selectedRow.find('td:eq(30)').text();
                var konfirmasiKehadiranInDepth = selectedRow.find('td:eq(31)').text();
                var ktb = selectedRow.find('td:eq(32)').text();
                var kpr = selectedRow.find('td:eq(33)').text();
                var siker = selectedRow.find('td:eq(34)').text();
                var hasilInDepth = selectedRow.find('td:eq(35)').text();
                var keteranganInDepth = selectedRow.find('td:eq(36)').text();
                var interviewerInDepth = selectedRow.find('td:eq(37)').text();
                var pengumumanInDepth = selectedRow.find('td:eq(38)').text();

                // Populate form fields with extracted values
                $('#tanggalInDepth').val(tanggalInDepth);
                $('#konfirmasiKehadiranInDepth').val(konfirmasiKehadiranInDepth);
                $('#ktb').val(ktb);
                $('#kpr').val(kpr);
                $('#siker').val(siker);
                $('#hasilInDepth').val(hasilInDepth);
                $('#keteranganInDepth').val(keteranganInDepth);
                $('#interviewerInDepth').val(interviewerInDepth);
                $('#pengumumanInDepth').val(pengumumanInDepth);

                // Trigger the modal display
                $('#editModalInDepth').modal('show');
            }

            // Handle "Edit" button click for InDepth form
            $('#editButtonInDepth').on('click', function () {
                var selectedIds = [];
                $('.select-checkbox:checked').each(function () {
                    var id = $(this).closest('tr').find('td:eq(3)').text();
                    selectedIds.push(id);
                });

                if (selectedIds.length > 0) {
                    if (selectedIds.length === 1) {
                        populateInDepthFormFields(selectedIds[0]);
                    } else {
                        $('#selectedIdsInputInDepth').val(selectedIds.join(', '));
                        $('#tanggalInDepth').val('');
                        $('#konfirmasiKehadiranInDepth').val('');
                        $('#ktb').val('');
                        $('#kpr').val('');
                        $('#siker').val('');
                        $('#hasilInDepth').val('');
                        $('#keteranganInDepth').val('');
                        $('#interviewerInDepth').val('');
                        $('#pengumumanInDepth').val('');

                        $('#editModalInDepth').modal('show');
                    }
                } else {
                    alert('Please select at least one row.');
                }
            });

            // Handle popstate event to show the InDepth modal when using the back button
            $(window).on('popstate', function () {
                $('#editModalInDepth').modal('show');
            });
            // InterviewUser
            // Function to populate InterviewUser form fields based on the selected ID
            function populateInterviewUserFormFields(selectedId) {
                var selectedRow = $('td:contains(' + selectedId + ')').closest('tr');

                // Extract values from the selected row
                var tanggalInterviewUser = selectedRow.find('td:eq(39)').text();
                var konfirmasiKehadiranInterviewUser = selectedRow.find('td:eq(40)').text();
                var dt = selectedRow.find('td:eq(41)').text();
                var ka = selectedRow.find('td:eq(42)').text();
                var pm = selectedRow.find('td:eq(43)').text();
                var pd = selectedRow.find('td:eq(44)').text();
                var bd = selectedRow.find('td:eq(45)').text();
                var ktb2 = selectedRow.find('td:eq(46)').text();
                var hasilInterviewUser = selectedRow.find('td:eq(47)').text();
                var keteranganInterviewUser = selectedRow.find('td:eq(48)').text();
                var interviewerInterviewUser = selectedRow.find('td:eq(49)').text();
                var pengumumanInterviewUser = selectedRow.find('td:eq(50)').text();

                // Populate form fields with extracted values
                $('#tanggalInterviewUser').val(tanggalInterviewUser);
                $('#konfirmasiKehadiranInterviewUser').val(konfirmasiKehadiranInterviewUser);
                $('#dt').val(dt);
                $('#ka').val(ka);
                $('#pm').val(pm);
                $('#pd').val(pd);
                $('#bd').val(bd);
                $('#ktb2').val(ktb2);
                $('#hasilInterviewUser').val(hasilInterviewUser);
                $('#keteranganInterviewUser').val(keteranganInterviewUser);
                $('#interviewerInterviewUser').val(interviewerInterviewUser);
                $('#pengumumanInterviewUser').val(pengumumanInterviewUser);

                // Trigger the modal display
                $('#editModalInterviewUser').modal('show');
            }

            // Handle "Edit" button click for InterviewUser form
            $('#editButtonInterviewUser').on('click', function () {
                var selectedIds = [];
                $('.select-checkbox:checked').each(function () {
                    var id = $(this).closest('tr').find('td:eq(3)').text();
                    selectedIds.push(id);
                });

                if (selectedIds.length > 0) {
                    if (selectedIds.length === 1) {
                        populateInterviewUserFormFields(selectedIds[0]);
                    } else {
                        $('#selectedIdsInputInterviewUser').val(selectedIds.join(', '));
                        $('#tanggalInterviewUser').val('');
                        $('#konfirmasiKehadiranInterviewUser').val('');
                        $('#dt').val('');
                        $('#ka').val('');
                        $('#pm').val('');
                        $('#pd').val('');
                        $('#bd').val('');
                        $('#ktb2').val('');
                        $('#hasilInterviewUser').val('');
                        $('#keteranganInterviewUser').val('');
                        $('#interviewerInterviewUser').val('');
                        $('#pengumumanInterviewUser').val('');

                        $('#editModalInterviewUser').modal('show');
                    }
                } else {
                    alert('Please select at least one row.');
                }
            });

            // Handle popstate event to show the InterviewUser modal when using the back button
            $(window).on('popstate', function () {
                $('#editModalInterviewUser').modal('show');
            });

            // HasilAkhir
            // Function to populate HasilAkhir form fields based on the selected ID
            function populateHasilAkhirFormFields(selectedId) {
                var selectedRow = $('td:contains(' + selectedId + ')').closest('tr');

                // Extract values from the selected row
                var hasilAkhir = selectedRow.find('td:eq(51)').text();
                var alasanTidakLolos = selectedRow.find('td:eq(52)').text();
                var spkwt = selectedRow.find('td:eq(53)').text();
                var masukKerja = selectedRow.find('td:eq(54)').text();

                // Populate form fields with extracted values
                $('#hasilAkhir').val(hasilAkhir);
                $('#alasanTidakLolos').val(alasanTidakLolos);
                $('#spkwt').val(spkwt);
                $('#masukKerja').val(masukKerja);

                // Trigger the modal display
                $('#editModalHasilAkhir').modal('show');
            }

            // Handle "Edit" button click for HasilAkhir form
            $('#editButtonHasilAkhir').on('click', function () {
                var selectedIds = [];
                $('.select-checkbox:checked').each(function () {
                    var id = $(this).closest('tr').find('td:eq(3)').text();
                    selectedIds.push(id);
                });

                if (selectedIds.length > 0) {
                    if (selectedIds.length === 1) {
                        populateHasilAkhirFormFields(selectedIds[0]);
                    } else {
                        $('#selectedIdsInputHasilAkhir').val(selectedIds.join(', '));
                        $('#hasilAkhir').val('');
                        $('#alasanTidakLolos').val('');
                        $('#spkwt').val('');
                        $('#masukKerja').val('');

                        $('#editModalHasilAkhir').modal('show');
                    }
                } else {
                    alert('Please select at least one row.');
                }
            });

            // Handle popstate event to show the HasilAkhir modal when using the back button
            $(window).on('popstate', function () {
                $('#editModalHasilAkhir').modal('show');
            });


        });
    </script>





</body>

</html>