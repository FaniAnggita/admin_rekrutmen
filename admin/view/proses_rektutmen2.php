<?php
$page = 'proses_rekrut';
include 'komponen/header.php';
include 'komponen/koneksi.php';
?>

<body>
    <?php
    include 'komponen/navbar2.php';
    ?>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  layout-without-menu">

        <div class="layout-container">


            <!-- Layout container -->
            <div class="layout-page">

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">

                        <!-- Basic Bootstrap Table -->
                        <div class="card">

                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h4>Proses Rekrutmen Kandidat</h4>
                                <div class="d-flex justify-content-end">
                                    <?php include_once 'modal/modal_proses_rekrutmen.php'; ?>
                                    <button type="button" class="btn btn-sm btn-primary me-2" data-bs-toggle="modal"
                                        data-bs-target="#modalFilterProses">
                                        <i class="fa-solid fa-filter"></i> Filter
                                    </button>
                                    <!-- FILTER BY DATE -->
                                    <?php
                                    if (isset($_POST['start_date']) && isset($_POST['end_date']) && $_POST['start_date'] != '' && $_POST['end_date'] != '') {
                                        $start_date = $_POST['start_date'];
                                        $end_date = $_POST['end_date'];
                                        $status = $_POST['status'];
                                        ?>
                                        <a href="../controller/cetak_laporan_rekrutmen.php?start_date=<?php echo $start_date; ?> & end_date=<?php echo $end_date; ?> & status=<?php echo $status; ?> "
                                            class="btn btn-sm btn-danger " target="_blank">
                                            <i class="fa-solid fa-print"></i> Export
                                        </a>
                                        <?php
                                    } else {
                                        ?>
                                        <a href="../controller/cetak_laporan_rekrutmen.php" class="btn btn-sm btn-danger "
                                            target="_blank">
                                            <i class="fa-solid fa-print"></i> Export
                                        </a>
                                        <?php
                                    }
                                    ?>


                                </div>
                            </div>

                            <div class="card-body">
                                <!-- <div class="row">
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
                                </div> -->

                            </div>
                            <?php
                            $queryHistori = "SELECT akun_platform FROM seleksi_wii GROUP BY akun_platform";
                            $resultHistori = mysqli_query($conn, $queryHistori);

                            // Check for errors
                            if (!$resultHistori) {
                                die("Query failed: " . mysqli_error($conn));
                            }
                            ?>
                            <datalist id="list-timezone">
                                <?php while ($rowHistori = mysqli_fetch_assoc($resultHistori)): ?>
                                    <option value="<?= $rowHistori['akun_platform'] ?>">
                                    <?php endwhile; ?>
                            </datalist>

                            <div class="card-body table-responsive">
                                <table id="deviceTable" class="table display table-sm table-bordered table-striped">
                                    <thead>
                                        <tr style="font-size: 12px;">
                                            <th colspan="14">Data Pelamar</th>

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


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php




                                        while ($row = $result->fetch_assoc()) {

                                            $tes = ($row['status'] == 1 ? 'text-danger' : '');
                                            echo "<tr style='line-height: 25px;'>";
                                            // echo "<td class='not-editable'><input type='checkbox' class='select-checkbox' data-id='" . $row['id'] . "' style='position: absolute; z-index: 9;'></td>";
                                            // echo "<td class='not-editable'><a href='edit_rekrutmen.php?id_pelamar=" . $row['id'] . "' class='btn btn-warning btn-sm'><i class='fa-solid fa-envelope'></i></a></td>";
                                            ?>
                                            <td>
                                                <p>
                                                    <button class="btn btn-danger btn-xs" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#multiCollapseExample2<?php echo $row['id']; ?>"
                                                        aria-expanded=" false" aria-controls="multiCollapseExample2"> <i
                                                            class='fa-solid fa-envelope'></i></button>
                                                </p>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="collapse multi-collapse"
                                                            id="multiCollapseExample2<?php echo $row['id']; ?>">
                                                            <div class=" card card-body">
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


                                            // AKhir Hasil Akhir
                                            echo "</tr>";
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


    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->


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
    <!-- DataTables ColumnFilter Plugin JS CDN -->

    <!-- / Layout wrapper -->

    <script>
        $(document).ready(function () {
            var table = $('#deviceTable').DataTable({
                fixedColumns: {
                    left: 7,
                },

                responsive: true,
                paging: false,
                scrollCollapse: true,
                scrollX: true,
                scrollY: 450,
                select: true,
                lengthMenu: [5, 10, 25, 50, 1200], // Specify the available page lengths
                pageLength: 10, // Set the initial page length
                orderCellsTop: true,
                autoWidth: true,

            });


            function fetchData() {
                $.ajax({
                    url: '../controller/data_rekrutmen.php', // Update with your backend file
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        updateTable(data);
                    },
                    error: function (error) {
                        console.log('Error fetching data: ', error);
                    }
                });
            }

            function updateTable(data) {
                // Clear existing rows
                table.clear();

                // Add new data to the table
                $.each(data, function (index, row) {
                    var tesClass = (row.status == 1 ? 'text-danger' : '');
                    var rowData = [
                        // Add your columns here using row.field_name
                        row.time,
                        row.kode_ps,
                        row.refer_posisi,
                        row.kode_pelamar,
                        row.nama_lengkap,
                        row.jenjang_pendidikan,
                        row.jurusan,
                        row.sekolah,
                        row.domisili,
                        row.gender,

                        row.tanggal_lahir,
                        row.no_hp,

                        // Add more columns as needed
                    ];
                    table.row.add(rowData);
                });

                // Draw the updated table
                table.draw();
            }

            // Fetch data initially
            fetchData();

            // Fetch data every 5 seconds (adjust as needed)
            setInterval(fetchData, 5000);



            // Create select inputs for each column
            table.columns().every(function () {
                var column = this;
                if (column.index() !== 0) {
                    // Use the header class to apply styles to both header and body
                    var select = $('<select class="w-100 form-control form-control-sm p-0 m-0"><option value=""></option></select>')
                        .appendTo($(column.header()).addClass('text-center')) // Add text-center class to the header
                        .on('click', function (e) {
                            e.stopPropagation(); // Stop the click event from propagating to the DataTable header
                        })
                        .on('change', function () {
                            var val = $.fn.dataTable.util.escapeRegex($(this).val());
                            column.search(val ? '^' + val + '$' : '', true, false).draw();
                        });

                    column.data().unique().sort().each(function (d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>');
                    });

                    // Prevent order event from propagating to the DataTable header
                    $(column.header()).on('click', function (e) {
                        e.stopPropagation();
                    });

                    // Set the width of the select input to match the width of the column
                    select.width($(column.header()).width());
                }
            });

            // Dynamically adjust column widths on content change
            function adjustColumnWidths() {
                table.columns().every(function () {
                    var maxWidth = 0;
                    var column = this;

                    // Iterate over each cell in the column
                    column.nodes().to$().each(function () {
                        // Get the width of the cell content
                        var cellWidth = $(this).width();
                        maxWidth = Math.max(maxWidth, cellWidth);
                    });

                    // Set the maximum width for the column
                    column.width(maxWidth);
                });

                // Redraw the DataTable to apply the changes
                table.draw();
            }

            // Call the adjustColumnWidths function on content change
            $('#deviceTable').on('input', 'td', adjustColumnWidths);

            $('#deviceTable').on('click', 'td.editable-combobox, td.editable-text, td.editable-datetime, td.editable-date, td.editable-time, td.editable-ac ', function () {
                var cell = $(this);

                // Check if the cell already contains an input, select, or datetime element
                if (!cell.find('input, select, input[type="datetime-local"], input[type="date"]').length) {
                    if (cell.hasClass('editable-combobox')) {
                        createComboBox(cell);
                    } else if (cell.hasClass('editable-datetime')) {
                        createDateTimeInput(cell);
                    } else if (cell.hasClass('editable-date')) {
                        createDateInput(cell);
                    } else if (cell.hasClass('editable-time')) {
                        createTimeInput(cell);
                    } else if (cell.hasClass('editable-ac')) {
                        createAutoCompleteInput(cell)
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

            function createTimeInput(cell) {
                var content = cell.text().trim();
                cell.html('<input type="time" class="form-control" value="' + content + '">');

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

            function createAutoCompleteInput(cell) {
                var content = cell.text().trim();
                cell.html('<input type="text" class="form-control" value="' + content + '" list="list-timezone" id="input-datalist">');
                var input = cell.find('input');
                input.focus();
                input.on('blur', function () {
                    cell.text(input.val());
                    updateDataWII(cell);
                });

                input.on('keypress', function (e) {
                    if (e.key === 'Enter') {
                        cell.text(input.val());
                        updateDataWII(cell);
                    }
                });
            }


            // UPdate Administrasi = DONE
            function updateData(cell) {
                var row = cell.closest('tr');
                var idPelamar = row.find('td:eq(4)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server
                var data = {
                    id_pelamar: idPelamar,
                    tanggal_administrasi: row.find('td:eq(14)').text(),
                    nilai_cv: row.find('td:eq(16)').text(), // Adjust the column index based on your actual structure
                    nilai_kualifikasi: row.find('td:eq(17)').text(),
                    nilai_pengalaman: row.find('td:eq(18)').text(),
                    hasil_seleksi_adm: row.find('td:eq(19)').text(),
                    keterangan_adm: row.find('td:eq(20)').text()
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

                table.draw();
            }

            // UPdate WII = DONE
            function updateReferPosisi(cell) {
                var row = cell.closest('tr');
                var idPelamar = row.find('td:eq(4)').text(); // Assuming the ID Pelamar is in the 4th column

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
                var idPelamar = row.find('td:eq(4)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server for WII
                var dataWII = {
                    id_pelamar: idPelamar,
                    waktu_interview: row.find('td:eq(21)').text(), // Adjust the column index based on your actual structure
                    jam_interview: row.find('td:eq(22)').text(),
                    konfirmasi_kehadiran_wii: row.find('td:eq(23)').text(),
                    p: row.find('td:eq(24)').text(),
                    a: row.find('td:eq(25)').text(),
                    k: row.find('td:eq(26)').text(),
                    r: row.find('td:eq(27)').text(),
                    akun_platform: row.find('td:eq(29)').text(),
                    interviewer_wii: row.find('td:eq(30)').text(),
                    rating_wii: row.find('td:eq(31)').text(),
                    keterangan_wii: row.find('td:eq(32)').text(),
                    pengumuman_wii: row.find('td:eq(33)').text()

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
                var idPelamar = row.find('td:eq(4)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server for Psikotest
                var dataPsikotest = {
                    id_pelamar: idPelamar,
                    tanggal_psikotest: row.find('td:eq(34)').text(), // Adjust the column index based on your actual structure
                    jam_psikotest: row.find('td:eq(35)').text(),
                    konfirmasi_kehadiran: row.find('td:eq(36)').text(),
                    pengumuman_psikotest: row.find('td:eq(39)').text(),
                    keterangan_psikotest: row.find('td:eq(38)').text(),
                    rating_psikotest: row.find('td:eq(37)').text()
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
                var idPelamar = row.find('td:eq(4)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server for Indepth
                var dataIndepth = {
                    id_pelamar: idPelamar,
                    tanggal_indepth: row.find('td:eq(40)').text(), // Adjust the column index based on your actual structure
                    jam_indepth: row.find('td:eq(41)').text(),
                    konfirmasi_kehadiran_in: row.find('td:eq(42)').text(),
                    KTB: row.find('td:eq(43)').text(),
                    KPR: row.find('td:eq(44)').text(),
                    Siker: row.find('td:eq(45)').text(),
                    interviewer_indepth: row.find('td:eq(46)').text(),
                    pengumuman_in: row.find('td:eq(49)').text(),
                    keterangan_in: row.find('td:eq(48)').text(),
                    hasil_indepth: row.find('td:eq(47)').text()
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
                var idPelamar = row.find('td:eq(4)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server for Test Bidang
                var dataTestBidang = {
                    id_pelamar: idPelamar,
                    tanggal_tes_bidang: row.find('td:eq(50)').text(), // Adjust the column index based on your actual structure
                    jam_tes_bidang: row.find('td:eq(51)').text(),
                    konfirmasi_kehadiran_tb: row.find('td:eq(52)').text(),
                    nilai_tb1: row.find('td:eq(53)').text(),
                    korektor1: row.find('td:eq(54)').text(),
                    nilai_tb2: row.find('td:eq(55)').text(),
                    korektor2: row.find('td:eq(56)').text(),
                    keterangan: row.find('td:eq(58)').text(),
                    pengumuman: row.find('td:eq(59)').text(),
                    hasil: row.find('td:eq(57)').text(),
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
                var idPelamar = row.find('td:eq(4)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server for Interview User
                var dataInterviewUser = {
                    id_pelamar: idPelamar,
                    tanggal_interview_user: row.find('td:eq(60)').text(), // Adjust the column index based on your actual structure
                    jam_iu: row.find('td:eq(61)').text(),
                    konfirmasi_kehadiran_iu: row.find('td:eq(62)').text(),
                    dt: row.find('td:eq(63)').text(),
                    ka: row.find('td:eq(64)').text(),
                    pm: row.find('td:eq(65)').text(),
                    pd: row.find('td:eq(66)').text(),
                    bd: row.find('td:eq(67)').text(),
                    ktb: row.find('td:eq(68)').text(),
                    interviewer_iu: row.find('td:eq(69)').text(),
                    hasil_iu: row.find('td:eq(70)').text(),
                    keterangan_iu: row.find('td:eq(71)').text(),
                    pengumuman_iu: row.find('td:eq(72)').text()
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
                var idPelamar = row.find('td:eq(4)').text(); // Assuming the ID Pelamar is in the 4th column

                // Prepare data to be sent to the server for Hasil Akhir
                var dataHasilAkhir = {
                    id_pelamar: idPelamar,
                    alasan_tidak_lolos: row.find('td:eq(73)').text(), // Adjust the column index based on your actual structure
                    spkwt: row.find('td:eq(74)').text(), // Adjust the column index based on your actual structure
                    onboard: row.find('td:eq(75)').text(), // Adjust the column index based on your actual structure
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




        });
    </script>


</body>

</html>