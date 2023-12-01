<?php
$page = 'master';
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
                                <h5 class="mb-0">Posisi</h5>
                                <a href="add_posisi.php" class="btn btn-danger btn-sm"> <i class="bx bx-plus"></i>
                                    Tambah</a>
                            </div>


                            <div class="card-body">
                                <table id="myTable" class="table display table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kode Posisi</th>
                                            <th>Nama Posisi</th>
                                            <th>Max. Usia Pelamar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        // Ambil data dari database dan tampilkan dalam tabel
                                        $sql = "SELECT * FROM posisi";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row['id_ps'] . "</td>";
                                                echo "<td>" . $row['kode_ps'] . "</td>";
                                                echo "<td>" . $row['nama_ps'] . "</td>";
                                                echo "<td>" . $row['max_usia'] . "</td>";
                                                ?>
                                                <td>
                                                    <div class="btn-group btn-group-sm dropend">
                                                        <button type=" button" class="btn btn-danger dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"
                                                            data-boundary="viewport" id="dropdown-button">
                                                            <i class='fa-solid fa-envelope'></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item"
                                                                    href="../controller/pesan/pesan.php?id='<?php echo $row['id']; ?>' && pesan=wii"
                                                                    target="_blank">WII</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="../controller/pesan/pesan.php?id='<?php echo $row['id']; ?>' && pesan=psikotest"
                                                                    target="_blank">Psikotest</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="../controller/pesan/pesan.php?id='<?php echo $row['id']; ?>' && pesan=indepth"
                                                                    target="_blank">Indepth</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="../controller/pesan/pesan.php?id='<?php echo $row['id']; ?>' && pesan=tesbidang"
                                                                    target="_blank">Test Bidang</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="../controller/pesan/pesan.php?id='<?php echo $row['id']; ?>' && pesan=interviewuser"
                                                                    target="_blank">Interview User</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <?php
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

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>


</body>

</html>