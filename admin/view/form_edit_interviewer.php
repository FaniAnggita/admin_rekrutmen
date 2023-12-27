<?php
$page = 'master';
include 'komponen/header.php';
include 'komponen/koneksi.php';
$id_int = $_GET['id_int']; // You may need to sanitize this input

// Fetch data based on id_lowongan
$sql = "SELECT * FROM interviewer WHERE id_int = '$id_int'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Assuming you only expect one row, as `id_lowongan` should be unique
    $row = $result->fetch_assoc();
} else {
    // Handle the case where no data is found for the given id_lowongan
    echo "No data found for id interviewer: $id_int";
}

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
                                <h5 class="mb-0">Edit Interviewer/Korektor</h5>
                                <a href="interviewer.php" class="btn btn-danger btn-sm"> <i class="bx bx-left-arrow-alt"></i> Kembali</a>
                            </div>

                            <div class="card-body">
                                <form id="editForm">
                                    <input type="text" name="id_int" id="id_int" value="<?php echo $row['id_int']; ?>" hidden>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="name">Nomor Induk Karyawan
                                            (NIK)</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-key"></i></span>
                                                <input type="number" class="form-control" id="nik" name="nik" value="<?php echo $row['nik']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="name">Name</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-user"></i></span>
                                                <input type="text" class="form-control" id="nama_int" name="nama_int" aria-label="John Doe" aria-describedby="nama_int" autocomplete="on" value="<?php echo $row['nama_int']; ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-end">
                                        <div class="col-sm-10">
                                            <button type="button" onclick="submitEditForm()">Simpan</button>
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
        function submitEditForm() {
            var id_int = document.getElementById('id_int').value;

            var nama_int = document.getElementById('nama_int').value;


            var data = {
                id_int: id_int,

                nama_int: nama_int
            };

            var xhr = new XMLHttpRequest();
            var url = '../controller/edit_interviewer.php'; // Adjust the URL based on your file structure

            xhr.open('POST', url, true);
            xhr.setRequestHeader('Content-Type', 'application/json');

            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Request was successful
                        alert('Data berhasil disimpan!');
                        window.location.href = 'interviewer.php'; // Redirect upon success
                    } else {
                        // Request failed
                        console.error('Error while saving data');
                    }
                }
            };

            xhr.send(JSON.stringify(data));
        }
    </script>

</body>

</html>