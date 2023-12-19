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
                                <?php

                                if (isset($_SESSION["nik"])) {
                                    $nik = $_SESSION["nik"];
                                    // SQL query to check user credentials
                                    $sql = "SELECT * FROM `users` WHERE `nik` = '$nik' LIMIT 1";
                                    $result = mysqli_query($conn, $sql);
                                    $user = mysqli_fetch_assoc($result);
                                    if ($user['role'] == 1) {
                                        echo '<a href="add_posisi.php" class="btn btn-danger btn-sm"> <i class="bx bx-plus"></i>
                                        Tambah</a>';
                                    }
                                }

                                ?>

                            </div>


                            <div class="card-body">
                                <table id="myTable" class="table display table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kode Posisi</th>
                                            <th>Nama Posisi</th>
                                            <th>Max. Usia Pelamar</th>
                                            <th>Jumlah Kebutuhan</th>
                                            <th>Status Posisi</th>
                                            <th>Histori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Ambil data dari database dan tampilkan dalam tabel
                                        $sql = "SELECT * FROM posisi";
                                        $resultPosisi = $conn->query($sql);

                                        if ($resultPosisi->num_rows > 0) {
                                            $i = 1; // Initialize counter
                                            while ($rowPosisi = $resultPosisi->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $i . "</td>";
                                                echo "<td>" . $rowPosisi['kode_ps'] . "</td>";
                                                echo "<td>" . $rowPosisi['nama_ps'] . "</td>";
                                                echo "<td>" . $rowPosisi['max_usia'] . "</td>";
                                                echo "<td>" . $rowPosisi['jumlah_kebutuhan'] . "</td>";
                                                echo $rowPosisi['status_posisi'] == 1 ? '<td class="text-success"> Buka </td>' : '<td class="text-danger"> Tutup </td>';
                                                echo '<td>';
                                        ?>
                                                <p class="text-center">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $i; ?>">
                                                        <i class="fa-solid fa-book"></i>
                                                    </button>
                                                </p>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal<?php echo $i; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Histori
                                                                    Jumlah Kebutuhan
                                                                    <?php echo $rowPosisi['kode_ps'] . '-' . $rowPosisi['nama_ps']; ?>
                                                                </h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php
                                                                $kode_ps = $rowPosisi['kode_ps'];
                                                                $queryHistori = "SELECT * FROM histori_kebutuhan_posisi WHERE kode_ps = '$kode_ps'";
                                                                $resultHistori = mysqli_query($conn, $queryHistori);

                                                                // Check for errors
                                                                if (!$resultHistori) {
                                                                    die("Query failed: " . mysqli_error($conn));
                                                                } ?>
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ID Histori</th>
                                                                            <th>Kode Posisi</th>
                                                                            <th>Date</th>
                                                                            <th>Jumlah Kebutuhan</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php while ($rowHistori = mysqli_fetch_assoc($resultHistori)) : ?>
                                                                            <tr>
                                                                                <td>
                                                                                    <?= $rowHistori['id_histori'] ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?= $rowHistori['kode_ps'] ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?= $rowHistori['date'] ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?= $rowHistori['jumlah_kebutuhan'] ?>
                                                                                </td>
                                                                            </tr>
                                                                        <?php endwhile; ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                echo '</td>';
                                                ?>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="form_edit_posisi.php?id_posisi=<?php echo $rowPosisi['id_ps']; ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <!-- <form method="post" action="">
                                                                <input type="text" id="uid" name="uid" value="" hidden />
                                                                <button type="submit" class="btn dropdown-item"><i class="bx bx-trash me-1"></i>Delete</button>
                                                            </form> -->
                                                        </div>
                                                    </div>
                                                </td>
                                        <?php
                                                echo "</tr>";
                                                $i++; // Increment counter
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
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>


</body>

</html>