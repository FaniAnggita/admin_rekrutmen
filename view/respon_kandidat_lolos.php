<?php
$page = 'respon_kandidat';
include 'komponen/header.php';
include 'komponen/koneksi.php';
?>

<body onload="startTime()">
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
                                <h4 class="mb-0 ">Data Pelamar/Kandidat Lolos</h4>
                            </div>
                            <div class="card-body row">
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

                                <div class="card-body">
                                    <table id="deviceTable" class="table display table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Tanggal Daftar</th>
                                                <th>Nama Lengkap</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Umur</th>
                                                <th>Domisili</th>
                                                <th>Email</th>
                                                <th>Informasi Lowongan</th>
                                                <th>Nomor HP</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jenjang Pendidikan</th>
                                                <th>Jurusan</th>
                                                <th>Sekolah/Universitas</th>
                                                <th>Posisi</th>
                                                <th>Max. Usia</th>
                                                <th>Dokumen</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            // Ambil data dari database dan tampilkan dalam tabel
                                            $sql = "SELECT * FROM pelamar2 plm JOIN posisi USING(kode_ps) WHERE plm.rekomendasi = 'yes'  GROUP BY plm.id ";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td>" . date('Y-m-d', strtotime($row['time'])) . "</td>";
                                                    echo "<td>" . $row['nama_lengkap'] . "</td>";
                                                    echo "<td>" . $row['tanggal_lahir'] . "</td>";
                                                    echo "<td>" . date_diff(date_create($row['tanggal_lahir']), date_create('today'))->y . "</td>";
                                                    echo "<td>" . $row['domisili'] . "</td>";
                                                    echo "<td>" . $row['email'] . "</td>";
                                                    echo "<td>" . $row['informasi_lowongan'] . "</td>";
                                                    echo "<td>" . $row['no_hp'] . "</td>";
                                                    echo "<td>" . $row['gender'] . "</td>";
                                                    echo "<td>" . $row['jenjang_pendidikan'] . "</td>";
                                                    echo "<td>" . $row['jurusan'] . "</td>";
                                                    echo "<td>" . $row['sekolah'] . "</td>";
                                                    echo "<td>" . $row['kode_ps'] . "</td>";
                                                    echo "<td>" . $row['max_usia'] . "</td>";
                                                    echo "<td><a href='" . $row['dokumen'] . "' target='_blank'>Lihat</a></td>";
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo "<tr><td colspan='12'>Tidak ada data pendaftar.</td></tr>";
                                            }

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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Include DataTables JavaScript -->
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

        <!-- <script>
    $(document).ready(function() {
        var table = $('#deviceTable').DataTable({
            "scrollX": true, // Enable horizontal scrolling
            "scrollY": "300px", // Set a fixed vertical scroll height
            "select": true, // Enable individual column searching
            "scrollCollapse": true, // Use the Scroller extension
        });



        // Add the individual column searching (select inputs) for each column
        table.columns().every(function() {
            var column = this;
            var columnIndex = column[0][0];

            // Check if the column index is not equal to 13 (the "Dokumen" column)
            if (columnIndex !== 14 && columnIndex !== 15) {
                var select = $('<select><option value=""></option></select>')
                    .appendTo($(column.header()))
                    .on('change', function() {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
                        column.search(val ? '^' + val + '$' : '', true, false).draw();
                    });

                column.data().unique().sort().each(function(d, j) {
                    select.append('<option value="' + d + '">' + d + '</option>');
                });
            }
        });
    });
</script> -->
        <script>
            $(document).ready(function() {
                var table = $('#deviceTable').DataTable({
                    "scrollX": true,
                    "scrollY": "300px",
                    "select": true,
                    "scrollCollapse": true,
                });

                // Initialize date range inputs
                var start_date_input = $('#start_date');
                var end_date_input = $('#end_date');

                // Add the individual column searching (select inputs) for each column
                table.columns().every(function() {
                    var column = this;
                    var columnIndex = column[0][0];

                    if (columnIndex !== 14) {
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

                $('#start_date, #end_date').on('change', function() {
                    var start_date = $('#start_date').val();
                    var end_date = $('#end_date').val();

                    table.draw();
                });

                $.fn.dataTable.ext.search.push(
                    function(settings, data, dataIndex) {
                        var start_date = $('#start_date').val();
                        var end_date = $('#end_date').val();
                        var tanggalDaftar = data[0]; // Kolom Tanggal Daftar

                        if ((start_date === '' && end_date === '') || (tanggalDaftar >= start_date && tanggalDaftar <= end_date)) {
                            return true;
                        }

                        return false;
                    }
                );
            });
        </script>


</body>

</html>