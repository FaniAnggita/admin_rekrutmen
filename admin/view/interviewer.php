<?php
$page = 'master';
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
                                <h5 class="mb-0">Interviewer/Korektor</h5>
                                <?php

                                if (isset($_SESSION["nik"])) {
                                    $nik = $_SESSION["nik"];
                                    // SQL query to check user credentials
                                    $sql = "SELECT * FROM `users` WHERE `nik` = '$nik' LIMIT 1";
                                    $result = mysqli_query($conn, $sql);
                                    $user = mysqli_fetch_assoc($result);
                                    if ($user['role'] == 1) {
                                        echo '
                                        <a href="add_interviewer.php" class="btn btn-danger btn-sm"> <i class="bx bx-plus"></i>
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
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        // Ambil data dari database dan tampilkan dalam tabel
                                        $sql = "SELECT * FROM interviewer";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row['id_int'] . "</td>";
                                                echo "<td>" . $row['nik'] . "</td>";
                                                echo "<td>" . $row['nama_int'] . "</td>";
                                                echo '
                                                <td>
                                                <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="edit_interviewer.php?"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <form  method="post" action=""> 
                                                                <input type="text" id="uid" name="uid" value="" hidden/>
                                                                <button type="submit" class="btn dropdown-item"><i class="bx bx-trash me-1"></i>Delete</button>
                                                            </form>
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                                ';
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