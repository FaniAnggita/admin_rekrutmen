<?php
$page = 'master';
include 'komponen/header.php';
include 'komponen/koneksi.php';

// Assuming you have a connection to the database ($conn)
$id_lowongan_to_edit = $_GET['id_lowongan']; // You may need to sanitize this input

// Fetch data based on id_lowongan
$sql = "SELECT * FROM lowongan_baru WHERE id_lowongan = '$id_lowongan_to_edit'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Assuming you only expect one row, as `id_lowongan` should be unique
    $existingData = $result->fetch_assoc();
} else {
    // Handle the case where no data is found for the given id_lowongan
    echo "No data found for id_lowongan: $id_lowongan_to_edit";
}

?>

<body ">
    <!-- Layout wrapper -->
    <div class=" layout-wrapper layout-content-navbar">
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
                            <h5 class="mb-0">Tambah Posisi/Jabatan</h5>
                            <a href="lowongan.php" class="btn btn-danger btn-sm"> <i class="bx bx-left-arrow-alt"></i>
                                Kembali</a>
                        </div>

                        <div class="card-body">
                            <form id="editForm" method="post">
                                <input type="text" id="id_lowongan" name="id_lowongan"
                                    value="<?php echo $id_lowongan_to_edit; ?>" hidden>
                                <div class=" row mb-3">
                                    <label class="col-sm-2 col-form-label" for="kode_ps">Posisi</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="bx bx-user"></i></span>
                                            <select id="kode_ps" class="form-select" name="kode_ps">
                                                <?php
                                                // Ambil data dari database dan tampilkan dalam tabel
                                                $sql_posisi = "SELECT * FROM posisi";
                                                $result_posisi = $conn->query($sql_posisi);

                                                if ($result_posisi->num_rows > 0) {
                                                    while ($row = $result_posisi->fetch_assoc()) {
                                                        $selected = ($row['kode_ps'] == $existingData['kode_ps']) ? 'selected' : '';
                                                        ?>
                                                        <option value="<?php echo $row['kode_ps']; ?>" <?php echo $selected; ?>>
                                                            <?php echo $row['nama_ps']; ?>
                                                        </option>
                                                    <?php }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="tenggat_daftar">Tenggat
                                        Pendaftaran</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                                            <input type="date" class="form-control" id="tenggat_daftar"
                                                name="tenggat_daftar" aria-label="John Doe"
                                                aria-describedby="tenggat_daftar" autocomplete="on"
                                                value="<?php echo $existingData['tenggat_daftar']; ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <!-- Add the TinyMCE textarea for 'deskripsi' -->
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5"
                                                required><?php echo $existingData['deskripsi']; ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="kualifikasi">Kualifikasi</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <!-- Add the TinyMCE textarea for 'kualifikasi' -->
                                            <textarea class="form-control" id="kualifikasi" name="kualifikasi" rows="5"
                                                required><?php echo $existingData['kualifikasi']; ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="status">Status</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="bx bx-question-mark"></i></span>
                                            <select id="status" class="form-select" name="status">
                                                <option value="1" <?php echo ($existingData['status'] == '1') ? 'selected' : ''; ?>>Dibuka</option>
                                                <option value="0" <?php echo ($existingData['status'] == '0') ? 'selected' : ''; ?>>Ditutup</option>
                                            </select>
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

    <!-- Include TinyMCE from CDN -->
    <script src="https://cdn.tiny.cloud/1/v21ibk7userhaa0pxe64bhmuibfz1vsnqqu32qew6iblxd79/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>


    <script>
        // Initialize TinyMCE for 'deskripsi' and 'kualifikasi'
        tinymce.init({
            selector: '#deskripsi',
            width: '100%',
            height: 200,
            plugins: 'lists advlist',
            toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            advlist_number_styles: 'lower-alpha' // only include lower alpha in list
            // Add any other TinyMCE options you need
        });

        tinymce.init({
            selector: '#kualifikasi',
            width: '100%',
            height: 200,
            plugins: 'lists advlist',
            toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            advlist_number_styles: 'lower-alpha' // only include lower alpha in list
        });
    </script>

    <script>
        function submitEditForm() {
            var id_lowongan = document.getElementById('id_lowongan').value;
            var kode_ps = document.getElementById('kode_ps').value;
            var tenggat_daftar = document.getElementById('tenggat_daftar').value;
            var deskripsi = tinymce.get('deskripsi').getContent();
            var kualifikasi = tinymce.get('kualifikasi').getContent();
            var status = document.getElementById('status').value;

            var data = {
                id_lowongan: id_lowongan,
                kode_ps: kode_ps,
                tenggat_daftar: tenggat_daftar,
                deskripsi: deskripsi,
                kualifikasi: kualifikasi,
                status: status
            };

            var xhr = new XMLHttpRequest();
            var url = '../controller/edit_lowongan.php'; // Adjust the URL based on your file structure

            xhr.open('POST', url, true);
            xhr.setRequestHeader('Content-Type', 'application/json');

            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Request was successful
                        alert('Data berhasil disimpan!');
                        window.location.href = 'lowongan.php'; // Redirect upon success
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