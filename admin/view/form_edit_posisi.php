<?php
include 'komponen/header.php';
include 'komponen/koneksi.php';

// Assuming you have a connection to the database ($conn)
$id_posisi = $_GET['id_posisi']; // You may need to sanitize this input

// Fetch data based on id_lowongan
$sql = "SELECT * FROM posisi WHERE id_ps = '$id_posisi'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Assuming you only expect one row, as `id_lowongan` should be unique
    $row = $result->fetch_assoc();
} else {
    // Handle the case where no data is found for the given id_lowongan
    echo "No data found for id posisi: $id_posisi";
}

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
                                <h5 class="mb-0">Edit Posisi/Jabatan</h5>
                                <a href="posisi.php" class="btn btn-danger btn-sm"> <i class="bx bx-left-arrow-alt"></i>
                                    Kembali</a>
                            </div>

                            <div class="card-body">
                                <form id="tambah">
                                    <div class="row mb-3">
                                        <input type="text" name="id_ps" id="id_ps" value="<?php echo $row['id_ps']; ?>" hidden>
                                        <label class="col-sm-2 col-form-label" for="kode_ps">Kode Posisi</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-key"></i></span>
                                                <input type="text" class="form-control" id="kode_ps" name="kode_ps" aria-describedby="kode_ps" value="<?php echo $row['kode_ps']; ?>" required readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="nama_ps">Nama Posisi</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-user"></i></span>
                                                <input type="text" class="form-control" id="nama_ps" name="nama_ps" aria-label="John Doe" aria-describedby="nama_ps" autocomplete="on" required value="<?php echo $row['nama_ps']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="max_usia">Max. Usia Pelamar</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-user"></i></span>
                                                <input type="text" class="form-control" id="max_usia" name="max_usia" aria-label="John Doe" aria-describedby="max_usia" autocomplete="on" required value="<?php echo $row['max_usia']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="jumlah_kebutuhan">Jumlah
                                            Kebutuhan</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-user"></i></span>
                                                <input type="number" class="form-control" id="jumlah_kebutuhan" name="jumlah_kebutuhan" aria-label="John Doe" aria-describedby="jumlah_kebutuhan" autocomplete="on" required value="<?php echo $row['jumlah_kebutuhan']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="status_posisi">Status Posisi</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-question-mark"></i></span>
                                                <select id="status_posisi" class="form-select" name="status_posisi">
                                                    <option value="1" <?php echo ($row['status_posisi'] == '1') ? 'selected' : ''; ?>>Dibuka</option>
                                                    <option value="0" <?php echo ($row['status_posisi'] == '0') ? 'selected' : ''; ?>>Ditutup</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
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
            // Form 1 submission
            $("#tambah").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "../controller/edit_posisi.php", // Replace with the path to your PHP script
                    data: formData,
                    success: function(response) {
                        alert(response); // Display the response from the server
                        // You can redirect or perform other actions as needed.
                        window.location.href = "posisi.php";
                    },
                    error: function() {
                        alert("Error while submitting Form 1");
                    }
                });
            });


        });
    </script>


</body>

</html>