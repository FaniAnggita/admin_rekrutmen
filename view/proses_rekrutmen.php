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


                            <!-- <div class="card-body row">
                                <div class="form-group col-4">
                                    <label for="start_date">Tanggal Awal Lamaran:</label>
                                    <input type="date" id="start_date" class="form-control">
                                </div>
                                <div class="form-group col-4">
                                    <label for="end_date">Tanggal Akhir Lamaran:</label>
                                    <input type="date" id="end_date" class="form-control">
                                </div>
                                <div class="form-group col-4">
                                    <label for="end_date">Rekomendasi</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Semua</option>
                                        <option>Belum Ditentukan (chosee)</option>
                                        <option>Lolos</option>
                                        <option>Tidak Lolos</option>
                                    </select>
                                </div>

                            </div> -->
                            <div class="card-body table-responsive">

                                <table id="deviceTable" class="table display table-sm table-bordered table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th colspan="4"></th>
                                            <th colspan="6" class="table-warning">Administrasi</th>
                                            <th colspan="8" class="table-info">WII</th>
                                            <th colspan="5" class="table-success">Psikotest</th>
                                            <th colspan="9" class="table-danger">Indepth</th>
                                            <th colspan="9" class="table-primary">Tes Bidang</th>
                                            <th colspan="12" class="table-warning">Interview User</th>
                                            <th colspan="3"></th>
                                        </tr>
                                        <tr class="text-center fw-bold">
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
                                            <th class="table-primary">Nilai Tes Bidang 1</th>
                                            <th class="table-primary">Korektor 1</th>
                                            <th class="table-primary">Nilai Test Bidang 2</th>
                                            <th class="table-primary">Korektor 2</th>
                                            <th class="table-primary">Hasil Test Bidang</th>
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
                                        LEFT JOIN seleksi_interviewuser sin ON pl.id = sin.id_pelamar";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td><a href='edit_rekrutmen.php?id_pelamar=" . $row['id'] . "' class='btn btn-danger btn-sm'><i class='bx bx-edit-alt'></i></a></td>";
                                                echo "<td>" . date('Y-m-d', strtotime($row['time'])) . "</td>";
                                                echo "<td>" . $row['id'] . "</td>";
                                                echo "<td>" . $row['nama_lengkap'] . "</td>";
                                                // Administrasi
                                                echo "<td><a href='" . $row['dokumen'] . "' target='_blank'>Lihat</a></td>";
                                                echo "<td>" . $row['nilai_cv'] . "</td>";
                                                echo "<td>" . $row['nilai_kualifikasi'] . "</td>";
                                                echo "<td>" . $row['nilai_pengalaman'] . "</td>";
                                                echo "<td>" . $row['hasil_seleksi_adm'] . "</td>";
                                                echo "<td>" . $row['keterangan'] . "</td>";
                                                // Akhir Administrasi
                                                // WII
                                                echo "<td>" . $row['waktuInterview'] . "</td>";
                                                echo "<td>" . $row['konfirmasiKehadiran'] . "</td>";
                                                echo "<td>" . $row['p'] . "</td>";
                                                echo "<td>" . $row['a'] . "</td>";
                                                echo "<td>" . $row['k'] . "</td>";
                                                echo "<td>" . $row['r'] . "</td>";
                                                echo "<td>" . $row['rating'] . "</td>";
                                                echo "<td>" . $row['pengumuman'] . "</td>";
                                                // Akhir WII
                                                // Psikotest
                                                echo "<td>" . $row['tanggalPsikotest'] . "</td>";
                                                echo "<td>" . $row['konfirmasiKehadiran'] . "</td>";
                                                echo "<td> - </td>";
                                                echo "<td>" . $row['rating'] . "</td>";
                                                echo "<td>" . $row['pengumuman'] . "</td>";
                                                // Akhir Psikotest
                                                // Indepth
                                                echo "<td>" . $row['tanggalIndepth'] . "</td>";
                                                echo "<td>" . $row['konfirmasiKehadiran'] . "</td>";
                                                echo "<td>" . $row['KTB'] . "</td>";
                                                echo "<td>" . $row['KPR'] . "</td>";
                                                echo "<td>" . $row['Siker'] . "</td>";
                                                echo "<td>" . $row['hasilIndepth'] . "</td>";
                                                echo "<td>" . $row['interviewerIndepth'] . "</td>";
                                                echo "<td>" . $row['pengumuman'] . "</td>";
                                                echo "<td>" . $row['keterangan'] . "</td>";
                                                // Akhir Indepth
                                                // Test Bidang
                                                echo "<td>" . $row['tanggalTesBidang'] . "</td>";
                                                echo "<td> - </td>";
                                                echo "<td>" . $row['nilaiTesBidang1'] . "</td>";
                                                echo "<td>" . $row['korektor1'] . "</td>";
                                                echo "<td>" . $row['nilaiTesBidang2'] . "</td>";
                                                echo "<td>" . $row['korektor2'] . "</td>";
                                                echo "<td>" . $row['hasil'] . "</td>";
                                                echo "<td>" . $row['keterangan'] . "</td>";
                                                echo "<td>" . $row['pengumuman'] . "</td>";
                                                // Akhir Test Bidang
                                                // Interview User
                                                echo "<td>" . $row['tanggalInterviewUser'] . "</td>";
                                                echo "<td>" . $row['konfirmasiKehadiran'] . "</td>";
                                                echo "<td>" . $row['dt'] . "</td>";
                                                echo "<td>" . $row['ka'] . "</td>";
                                                echo "<td>" . $row['pm'] . "</td>";
                                                echo "<td>" . $row['pd'] . "</td>";
                                                echo "<td>" . $row['bd'] . "</td>";
                                                echo "<td>" . $row['ktb'] . "</td>";
                                                echo "<td>" . $row['interviewer'] . "</td>";
                                                echo "<td>" . $row['hasil'] . "</td>";
                                                echo "<td>" . $row['pengumuman'] . "</td>";
                                                echo "<td>" . $row['keterangan'] . "</td>";
                                                // Akhir Interview User
                                                // Alasan
                                                echo "<td> - </td>";
                                                // Akhir Alasan
                                                // Etc
                                                echo "<td> - </td>";
                                                echo "<td> - </td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='28'>Tidak ada data.</td></tr>";
                                        }

                                        // Close the database connection
                                        $conn->close();
                                        ?>
                                    </tbody>
                                </table>
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
        $(document).ready(function() {
            var table = $('#deviceTable').DataTable({
                fixedColumns: {
                    left: 4
                },
                paging: true,
                scrollCollapse: true,
                scrollY: true,
                scrollX: true,
                select: true,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print', // Existing buttons
                    {
                        extend: 'excelHtml5',
                        text: 'Print Excel', // Text for the button
                        className: 'btn-excel', // Optional custom class for styling
                        exportOptions: {
                            columns: ':visible' // Export all visible columns
                        }
                    }
                ]
            });

            // Create select inputs for each column
            table.columns().every(function() {
                var column = this;
                if (column.index() !== 0) {
                    var select = $('<select><option value=""></option></select>')
                        .appendTo($(column.header()))
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex($(this).val());
                            column.search(val ? '^' + val + '$' : '', true, false).draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>');
                    });
                }
            });
        });
    </script>





</body>

</html>