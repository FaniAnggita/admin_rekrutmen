<?php
$page = 'proses_rekrut';
include 'komponen/header.php';
include 'komponen/koneksi.php';
?>

<body onload="startTime()">
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


                            <div class="card-body ">
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

                                    <div class="form-group col-2">
                                        <button type="submit" class="btn btn-primary mt-4 w-100">Cari</button>
                                    </div>

                                </form>
                            </div>
                            <div class="card-body">
                                <button id="editButton" class="btn btn-danger btn-sm"><i class='bx bx-edit-alt'></i>
                                    Edit</button>

                            </div>
                            <div class="card-body table-responsive">

                                <table id="deviceTable" class="table display table-sm table-bordered table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th colspan="5"></th>
                                            <th colspan="7" class="table-warning">Administrasi</th>
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
                                            <th class="table-warning">Aksi</th>
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
                                            <!-- Alasan -->
                                            <th class="table-danger">Hasil Akhir</th>
                                            <th class="table-danger">Alasan Tidak Lolos</th>
                                            <!-- Akhir Alasan -->
                                            <!-- etc -->
                                            <th class="table-success">SPKWT</th>
                                            <th class="table-success">Masuk Kerja</th>

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
                                                echo "<tr>";
                                                echo "<td><input type='checkbox' class='select-checkbox' data-id='" . $row['id'] . "'></td>";
                                                echo "<td><a href='edit_rekrutmen.php?id_pelamar=" . $row['id'] . "' class='btn btn-danger btn-sm'><i class='bx bx-edit-alt'></i></a></td>";
                                                echo "<td>" . date('Y-m-d', strtotime($row['time'])) . "</td>";
                                                echo "<td>" . $row['id'] . "</td>";
                                                echo '<td>  <button id="editButton" class="btn btn-danger btn-sm"><i class="bx bx-edit-alt"></i>
                                                Edit</button> </td>';
                                                // Administrasi
                                                echo "<td><a href='" . $row['dokumen'] . "' target='_blank'>Lihat</a></td>";
                                                echo "<td>" . $row['nilai_cv'] . "</td>";
                                                echo "<td>" . $row['nilai_kualifikasi'] . "</td>";
                                                echo "<td>" . $row['nilai_pengalaman'] . "</td>";
                                                echo "<td>" . $row['hasil_seleksi_adm'] . "</td>";
                                                echo "<td>" . $row['keterangan_adm'] . "</td>";
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
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Edit Selected Rows</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Display selected IDs here
                                    <p id="selectedIds"></p> -->
                                    <form action="control_seleksi.php" method="post" class="row">
                                        <div class="col-12">
                                            <label for="selectedIdsInput" class="form-label">Selected IDs:</label>
                                            <input type="text" name="id" class="form-control" id="selectedIdsInput"
                                                readonly>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>

                                </div> -->
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

            // Handle "Edit" button click
            $('#editButton').on('click', function () {
                var selectedIds = [];
                $('.select-checkbox.selected').each(function () {
                    selectedIds.push($(this).data('id'));
                });

                // Display the selected IDs in the paragraph
                $('#selectedIds').text('Selected IDs: ' + selectedIds.join(', '));

                // Set the value of the input field
                $('#selectedIdsInput').val(selectedIds.join(', '));

                // Open the modal
                $('#editModal').modal('show');
            });



        });
    </script>





</body>

</html>