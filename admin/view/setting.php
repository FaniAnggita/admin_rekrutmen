<?php
$page = 'setting';
include 'komponen/header.php';
include 'komponen/koneksi.php';


if (isset($_SESSION["nik"])) {
    $nik = $_SESSION["nik"];
    // SQL query to check user credentials
    $sql = "SELECT * FROM `users` WHERE `nik` = '$nik' LIMIT 1";
    $result = mysqli_query($conn, $sql);


    $user = mysqli_fetch_assoc($result);
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
                                <h5 class="mb-0">User Setting</h5>
                            </div>


                            <div class="card-body">
                                <form id="edit_user">
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="nik">NIK</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-id-card"></i></span>
                                                <input type="text" class="form-control" id="nik" name="nik"
                                                    aria-label="John Doe" aria-describedby="nik" autocomplete="off"
                                                    readonly value="<?php echo $user['nik']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="name">Name</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-user"></i></span>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    aria-label="John Doe" aria-describedby="name" autocomplete="off"
                                                    readonly value="<?php echo $user['name']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="email">Email</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    autocomplete="off" readonly value="<?php echo $user['email']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="old_password">Old Password</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-key"></i></span>
                                                <input type="password" class="form-control" id="old_password"
                                                    name="old_password" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="new_password">New Password</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-key"></i></span>
                                                <input type="passsword" class="form-control" id="new_password"
                                                    name="new_password" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="confirm_password">New Confirm
                                            Password</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-key"></i></span>
                                                <input type="password" class="form-control" id="confirm_password"
                                                    name="confirm_password" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-end">
                                        <div class="col-sm-10">
                                            <button type="button" class="btn btn-primary"
                                                id="submitButton">Simpan</button>
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
            $("#submitButton").click(function () {
                // Get form data
                var formData = $("#edit_user").serialize();

                // Make Ajax request
                $.ajax({
                    type: "POST",
                    url: "../controller/setting.php", // Update with the actual path to your server-side script
                    data: formData,
                    success: function (response) {
                        alert(response); // Display the server response
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
</body>

</html>