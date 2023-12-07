<?php
$page = 'user';
include 'komponen/header.php';
include 'komponen/koneksi.php';


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nikToEdit = isset($_GET['nik']) ? $_GET['nik'] : '';

// Function to get user data based on NIK
function getUserData($conn, $nik)
{
    $sql = "SELECT * FROM users WHERE nik = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nik);
    $stmt->execute();
    $result = $stmt->get_result();
    $userData = $result->fetch_assoc();
    $stmt->close();

    return $userData;
}

$userData = getUserData($conn, $nikToEdit);
$conn->close();

// Function to hash the password
function hashPassword($password)
{
    // Use a strong hashing algorithm like password_hash
    return password_hash($password, PASSWORD_DEFAULT);
}
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
                                <h5 class="mb-0">Edit User</h5>
                                <a href="user_management.php" class="btn btn-danger btn-sm"> <i class="bx bx-plus"></i>
                                    Manajemen User</a>
                            </div>


                            <div class="card-body">
                                <form id="edit_user">
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="nik">NIK</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-id-card"></i></span>
                                                <input type="text" class="form-control" id="nik" name="nik"
                                                    value="<?php echo $userData['nik']; ?>" aria-describedby="nik"
                                                    autocomplete="off" required readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="name">Name</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-user"></i></span>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="<?php echo $userData['name']; ?>" aria-describedby="name"
                                                    autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="email">Email</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="<?php echo $userData['email']; ?>" autocomplete="off"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="password">Password</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-key"></i></span>
                                                <input type="password" class="form-control" id="password"
                                                    name="password" autocomplete="off">
                                            </div>
                                            <small class="text-muted">Leave it blank if you don't want to change the
                                                password.</small>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="copassword">Confirm Password</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-key"></i></span>
                                                <input type="password" class="form-control" id="copassword"
                                                    name="copassword" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="role">Role</label>
                                        <div class="col-sm-10">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-cog"></i></span>
                                                <select id="role" name="role" class="form-select" required>
                                                    <option value="1" <?php echo ($userData['role'] == 1) ? 'selected' : ''; ?>>Admin</option>
                                                    <option value="2" <?php echo ($userData['role'] == 2) ? 'selected' : ''; ?>>Kadiv</option>
                                                    <option value="3" <?php echo ($userData['role'] == 3) ? 'selected' : ''; ?>>Manager</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-sm-10">
                                            <button type="button" class="btn btn-primary"
                                                id="updateButton">Update</button>
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
        // Assuming you have jQuery included in your project
        $(document).ready(function () {
            // Handle the update button click event
            $("#updateButton").on("click", function () {
                // Perform the update operation using AJAX or submit the form to a server
                // You need to implement the update logic based on your requirements

                // Get form data
                var formData = $("#edit_user").serialize();

                // Perform AJAX request to update data
                $.ajax({
                    type: "POST",
                    url: "../controller/edit_user.php", // Replace with your update script
                    data: formData,
                    success: function (response) {
                        // Handle the response (e.g., show success message)
                        console.log(response);
                    },
                    error: function (error) {
                        // Handle the error (e.g., show error message)
                        console.error(error);
                    }
                });
            });
        });
    </script>


</body>

</html>