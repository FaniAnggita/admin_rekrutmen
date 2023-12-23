<?php require_once 'komponen/head.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo_main.png" alt="">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.php">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="index.php#about">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="index.php#services">Lowongan Kerja</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->



    <main id="main">

        <?php
        require_once('koneksi.php');

        $kode_ps = $_GET['kode_ps'];

        // Membuat prepared statement
        $sql = "SELECT * FROM lowongan_baru JOIN posisi USING(kode_ps) WHERE kode_ps = ?";
        $stmt = $conn->prepare($sql);

        // Bind parameter
        $stmt->bind_param("s", $kode_ps);

        // Eksekusi prepared statement
        $stmt->execute();

        // Mendapatkan hasil query
        $result = $stmt->get_result();


        // Fetch satu baris data
        $row = $result->fetch_assoc();



        ?>

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Lowongan Kerja</a></li>
                    <li><?php echo $row['nama_ps']; ?></li>
                </ol>


            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry">


                            <h2 class="entry-title">
                                <?php echo $row['nama_ps']; ?>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> Dibuka hingga <?php
                                                                                                                    $tenggatDaftar = $row['tenggat_daftar'];
                                                                                                                    $formattedDate = date('d-m-Y', strtotime($tenggatDaftar));
                                                                                                                    echo $formattedDate;
                                                                                                                    ?></li>
                                    <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> -->
                                </ul>
                            </div>

                            <div class="entry-content">
                                <div class="card">
                                    <div class="card-header">
                                        Deskripsi
                                    </div>
                                    <div class="card-body">
                                        <?php echo $row['deskripsi']; ?>
                                    </div>
                                    <div class="card-header">
                                        Kualifikasi
                                    </div>
                                    <div class="card-body">
                                        <?php echo $row['kualifikasi']; ?>
                                    </div>
                                </div>
                                <div class="read-more mt-3">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Lamar Sekarang
                                    </button>


                                </div>
                            </div>

                        </article><!-- End blog entry -->

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Lowongan Kerja Lain</h3>
                            <hr>
                            <div class="sidebar-item categories">
                                <ul>
                                    <?php
                                    $sql = "SELECT * FROM lowongan_baru JOIN posisi USING(kode_ps) WHERE status = 1 AND kode_ps != '$kode_ps'";
                                    $result = $conn->query($sql);
                                    $i = 0;
                                    if ($result->num_rows > 0) {
                                        while ($row3 = $result->fetch_assoc()) {
                                    ?>
                                            <li>
                                                <a href="detail_lowongan.php?kode_ps=<?php echo $row3['kode_ps']; ?>"> <?php echo $row3['nama_ps']; ?></a>

                                            </li>
                                            <hr>
                                    <?php }
                                    } ?>
                                </ul>
                            </div><!-- End sidebar categories-->



                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

    <!-- modal lamaran -->
    <!-- Modal -->
    <div class="modal fade modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Lamar Posisi <?php echo $row['nama_ps']; ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="proses_form.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>

                        <div class="form-group mt-4">
                            <?php
                            $pilih_posisi = $kode_ps;
                            $sql = "SELECT kode_ps, nama_ps FROM posisi WHERE kode_ps = '$pilih_posisi'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) { ?>
                                <?php while ($row2 = $result->fetch_assoc()) { ?>
                                    <input type="text" class="form-control" id="posisi" name="posisi" value="<?php echo $row2['kode_ps']; ?>" hidden>
                            <?php }
                            } else {
                                echo "0 results";
                            }
                            ?>

                        </div>
                        <div class="form-group mt-4">
                            <label for="nama_lengkap">Posisi</label>
                            <?php
                            $pilih_posisi = $kode_ps;
                            $sql = "SELECT kode_ps, nama_ps FROM posisi WHERE kode_ps = '$pilih_posisi' LIMIT 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) { ?>
                                <?php while ($row2 = $result->fetch_assoc()) { ?>
                                    <input type="text" class="form-control" value="<?php echo $row2['nama_ps']; ?>" disabled>
                            <?php }
                            } else {
                                echo "0 results";
                            }
                            ?>

                        </div>
                        <!-- Nama Lengkap -->
                        <div class="form-group mt-4">
                            <label for="nama_lengkap">Nama Lengkap:</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                            <div class="invalid-feedback">
                                Silakan isi Nama Lengkap.
                            </div>
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="form-group mt-4">
                            <label for="tanggal_lahir">Tanggal Lahir:</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                            <div class="invalid-feedback">
                                Silakan pilih Tanggal Lahir.
                            </div>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="form-group mt-4">
                            <label>Jenis Kelamin:</label>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="gender_laki" name="gender" value="Laki-Laki" required>
                                <label class="form-check-label" for="gender_laki">Laki-Laki</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="gender_perempuan" name="gender" value="Perempuan" required>
                                <label class="form-check-label" for="gender_perempuan">Perempuan</label>
                            </div>
                            <div class="invalid-feedback">
                                Silakan pilih Jenis Kelamin.
                            </div>
                        </div>

                        <!-- Domisili -->
                        <div class="form-group mt-4">
                            <label for="domisili">Domisili:</label>
                            <input type="text" class="form-control" id="domisili" name="domisili" required>
                            <div class="invalid-feedback">
                                Silakan isi Domisili.
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group mt-4">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">
                                Silakan isi Email dengan format yang benar.
                            </div>
                        </div>

                        <!-- Informasi Lowongan -->
                        <div class="form-group mt-4">
                            <label for="informasi_lowongan">Informasi Lowongan:</label>
                            <select class="form-control" id="informasi_lowongan" name="informasi_lowongan" required>
                                <option value="">Pilih sumber informasi</option>
                                <option value="Instagram">Instagram</option>
                                <option value="LinkedIn">LinkedIn</option>
                                <option value="Jobfair">Jobfair</option>
                                <option value="Jobfair">Jobfair</option>
                                <option value="JobStreet">JobStreet</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Twitter">Twitter</option>
                                <option value="Telegram">Telegram</option>
                                <option value="Kampus">Kampus</option>
                                <option value="Sekolah">Sekolah</option>
                                <option value="KitaLulus">KitaLulus</option>
                                <option value="HiredToday">HiredToday</option>
                                <option value="Teman/Keluarga/Lainnya">Teman/Keluarga/Lainnya</option>
                                <option value="Website Pustaka PT Pustaka Insan Madani">Web PT Pustaka Insan Madani
                                </option>
                                <option value="Glints">Glints</option>
                                <option value="JobStreetExpress">JobStreet Express</option>
                                <option value="Loker.id">Loker.id</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <div class="invalid-feedback">
                                Silakan pilih sumber informasi.
                            </div>
                        </div>

                        <!-- Nomor HP -->
                        <div class="form-group mt-4">
                            <label for="no_hp">Nomor HP:</label>
                            <input type="tel" class="form-control" id="no_hp" name="no_hp" required>
                            <div class="invalid-feedback">
                                Silakan isi Nomor HP.
                            </div>
                        </div>

                        <!-- Jenjang Pendidikan -->
                        <div class="form-group mt-4">
                            <label for="jenjang_pendidikan">Jenjang Pendidikan:</label>
                            <select class="form-control" id="jenjang_pendidikan" name="jenjang_pendidikan" required>
                                <option value="">Pilih Jenjang Pendidikan</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA/SMK">SMA/SMK</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                            </select>
                            <div class="invalid-feedback">
                                Silakan pilih Jenjang Pendidikan.
                            </div>
                        </div>

                        <!-- Jurusan -->
                        <div class="form-group mt-4">
                            <label for="jurusan">Jurusan:</label>
                            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                            <div class="invalid-feedback">
                                Silakan isi Jurusan.
                            </div>
                        </div>

                        <!-- Sekolah/Universitas -->
                        <div class="form-group mt-4">
                            <label for="sekolah">Sekolah/Universitas:</label>
                            <input type="text" class="form-control" id="sekolah" name="sekolah" required>
                            <div class="invalid-feedback">
                                Silakan isi Nama Sekolah/Universitas.
                            </div>
                        </div>

                        <!-- Unggah Dokumen (PDF) -->
                        <div class="form-group mt-4">
                            <label for="dokumen">Unggah Dokumen (PDF):</label>
                            <input type="file" class="form-control-file" id="dokumen" name="dokumen" accept=".pdf" required>
                            <div class="invalid-feedback">
                                Silakan unggah dokumen dalam format PDF.
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <button type="submut" name="submit" class="btn btn-primary">Kirim Lamaran</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Data</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->
                </div>
                <div class="modal-body">
                    Apakah yakin data yang Anda masukkan sudah benar?
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> -->
                    <button type="button" class="btn btn-primary" id="submitData">Ya, Kirim Data</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Footer ======= -->

    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);

            // Hapus event listener untuk tombol "Show Confirmation Modal"
            // document.getElementById('showConfirmationModal').addEventListener('click', function() {
            //     var form = document.querySelector('.needs-validation');
            //     if (form.checkValidity() === false) {
            //         form.classList.add('was-validated');
            //     } else {
            //         $('#confirmationModal').modal('show'); // Menampilkan modal konfirmasi
            //     }
            // });

            // Tambahkan event listener untuk tombol "Submit"
            document.getElementById('submitData').addEventListener('click', function() {
                // Kirim data ke server tanpa konfirmasi
                var form = document.querySelector('.needs-validation');
                if (form.checkValidity() === true) {
                    form.submit();
                }
            });
        })();
    </script>

</body>

</html>