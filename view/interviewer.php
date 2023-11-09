<?php
$page = 'proses_rekrut';
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
                                <h5 class="mb-0">Interviewer dan Korektor</h5>
                                <a href="proses_rekrutmen.php" class="btn btn-danger btn-sm"> <i class="bx bx-left-arrow-alt"></i> Kembali</a>
                            </div>

                            <div class="card-body">


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
            // Form 1 submission
            $("#form1").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "../controller/seleksi_administrasi.php", // Replace with the path to your PHP script
                    data: formData,
                    success: function(response) {
                        alert(response); // Display the response from the server
                        // You can redirect or perform other actions as needed.
                    },
                    error: function() {
                        alert("Error while submitting Form 1");
                    }
                });
            });

            // Form 2 submission
            $("#form2").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "../controller/seleksi_wii.php", // Path to your PHP script
                    data: formData,
                    success: function(response) {
                        alert(response); // Display the response from the server
                        // You can redirect or perform other actions as needed.
                    },
                    error: function() {
                        alert("Error while submitting Form 2");
                    }
                });
            });

            // Form 3 submission
            $("#form3").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "../controller/seleksi_psikotest.php", // Path to your PHP script
                    data: formData,
                    success: function(response) {
                        alert(response); // Display the response from the server
                        // You can redirect or perform other actions as needed.
                    },
                    error: function() {
                        alert("Error while submitting Form 3");
                    }
                });
            });

            // form 4
            $("#form4").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "../controller/seleksi_indepth.php", // Path to your PHP script
                    data: formData,
                    success: function(response) {
                        alert(response); // Display the response from the server
                        // You can redirect or perform other actions as needed.
                    },
                    error: function() {
                        alert("Error while submitting Form 4");
                    }
                });

            });

            // Form 5 submission
            $("#form5").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "../controller/seleksi_tesbidang.php",
                    data: formData,
                    success: function(response) {
                        alert(response); // Display the response from the server
                        // You can redirect or perform other actions as needed.
                    },
                    error: function() {
                        alert("Error while submitting Form 5");
                    }
                });
            });

            // Form 6 submission
            $("#form6").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "../controller/seleksi_interviewuser.php",
                    data: formData,
                    success: function(response) {
                        alert(response); // Display the response from the server
                        // You can redirect or perform other actions as needed.
                    },
                    error: function() {
                        alert("Error while submitting Form 6");
                    }
                });
            });

            // Form 6 submission
            $("#form7").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "../controller/pelamar_lolos.php",
                    data: formData,
                    success: function(response) {
                        alert(response); // Display the response from the server
                        // You can redirect or perform other actions as needed.
                    },
                    error: function() {
                        alert("Error while submitting Form 7");
                    }
                });
            });
        });
    </script>


</body>

</html>