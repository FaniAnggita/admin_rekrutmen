<?php require_once 'koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>
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
<!DOCTYPE HTML>
<html>

<head>
    <title>PIM | Karier</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Pustaka Insan Madani" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://insanmadani.com/rekrutmen/assets/js/jquery.min.js"></script>
    <script src="https://insanmadani.com/rekrutmen/assets/js/bootstrap.min.js"></script>
    <link href="https://insanmadani.com/rekrutmen/assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="https://insanmadani.com/rekrutmen/assets/css/style.css" rel='stylesheet' type='text/css' />
    <link href="https://insanmadani.com/rekrutmen/assets/css/lumen.css" rel='stylesheet' type='text/css' />
    <link href="https://insanmadani.com/rekrutmen/assets/css/framework.css" rel='stylesheet' type='text/css' />
    <!-- <link href="https://insanmadani.com/rekrutmen/assets/css/offcanvas.css" rel='stylesheet' type='text/css' /> -->
    <link href="https://insanmadani.com/rekrutmen/assets/css/custom.css" rel='stylesheet' type='text/css' />
    <link href="https://insanmadani.com/rekrutmen/assets/css/font-awesome.min.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet'
        type='text/css'>

    <link href="https://insanmadani.com/rekrutmen/assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://insanmadani.com/rekrutmen/assets/css/sweetalert2.min.css">
    <link rel="icon" href="https://insanmadani.com/rekrutmen/images/Insan madani.png" type="image/gif">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
        body {
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
            color: #0F2535;
        }

        .navbar-brand {
            height: auto;
        }

        .nav>li>a {
            padding-left: 45px;
            padding-right: 45px;
        }

        .foot h4 {
            color: white;
            font-weight: 700;
        }

        .btn-primary {
            color: #ffffff;
            background-color: #1548A1;
            border-color: #00058C;
        }

        p {
            margin: 0px;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-group.open .dropdown-toggle.btn-primary {
            background-color: #00058C;
            border-color: #00058C;
        }

        a .fa,
        a .glyphicon {
            margin-right: 6px;
        }

        @font-face {
            src: url(https://insanmadani.com/rekrutmen/assets/fonts/MyriadPro-Bold.otf);
            font-family: 'Myriad pro Bold';
        }

        @font-face {
            src: url(https://insanmadani.com/rekrutmen/assets/fonts/MyriadPro-Regular.otf);
            font-family: 'Myriad';
        }
    </style>

</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="https://insanmadani.com/"><img
                                src="https://insanmadani.com/template/images/logo_main.png" alt="" width="200" /></a>
                    </div>
                    <!--/.navbar-header-->

                </div>
                <div class="col-md-9">

                    <!-- 			    	 			 <a href="https://insanmadani.com/rekrutmen/index.php/Daftar" class="btn btn-warning">Daftar</a>
                                  <a href="https://insanmadani.com/rekrutmen/index.php/Daftar" class="btn btn-primary">Masuk</a> -->
                </div>
            </div>
        </div>
    </header>


    <nav class="navbar navbar-inverse bs-docs-nav" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                    data-target=".bs-navbar-collapse">
                    <span class="sr-only">navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation" style="height: 1px;"
                aria-expanded="false">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-home"></i>
                            BERANDA</a>
                    </li>
                    <!-- <li>
                        <a href="detail_lowongan.php"><i class="fa fa-book"></i>
                            INFO LOWONGAN KERJA</a>
                    </li> -->
                </ul>

            </nav>
        </div>
    </nav>
    <div class="container">
        <div class="single row">


            <div class="col-md-4">
                <div class="col_3">
                    <h3>Loker Terbaru</h3>
                    <ul class="list_1">
                        <?php
                        $sql = "SELECT * FROM lowongan_baru JOIN posisi USING(kode_ps) WHERE status = 1 AND kode_ps != '$kode_ps'";
                        $result = $conn->query($sql);
                        $i = 0;
                        if ($result->num_rows > 0) {
                            while ($row3 = $result->fetch_assoc()) {
                                ?>
                                <li>
                                    <a href="detail_lowongan.php?kode_ps=<?php echo $row3['kode_ps']; ?>">
                                        <?php echo $row3['nama_ps']; ?>
                                    </a>

                                </li>
                                <hr>
                            <?php }
                        } ?>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#list_1 a').click(function () {
                        var url = $(this).attr('href');
                        $('#location_box1').load(url);
                        return false;
                    });
                });
                /*$("#list_1 a").click(function(){
                  $.ajax({url: "demo_test.txt", success: function(result){
                    $("#location_box1").html(result);
                  }});
                });*/
            </script>

            <div class="col-md-8">

                <div class="row m-t-20">
                    <div class="col-sm-12">

                        <div class="location_box1">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3 class="c-orange m-0">
                                        <?php echo $row['nama_ps']; ?>
                                    </h3><span class="m-0 c-darkblue"> <br>dibuka sampai
                                        <?php
                                        $tenggatDaftar = $row['tenggat_daftar'];
                                        $formattedDate = date('d-m-Y', strtotime($tenggatDaftar));
                                        echo $formattedDate;
                                        ?>
                                    </span>
                                </div>
                                <div class="col-md-4">
                                    <!-- <button type="button" class="btn btn-success pull-right" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Lamar Sekarang
                                    </button> -->
                                    <!-- tombol pemicu -->
                                    <button class="btn btn-default btn-success" data-toggle="modal"
                                        data-target="#tesModal">
                                        Lamar Sekarang
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <strong><strong>Deskripsi</strong><br />
                                <?php echo $row['deskripsi']; ?>
                                <br /><strong>Kualifikasi :</strong><br />
                                <?php echo $row['kualifikasi']; ?>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="foot"
        style="padding-left: 0px !important;border-top:20px solid #fdbf0f;color:#fff;font-size:14px;font-family:calibri;background:url('https://insanmadani.com/template/images/footer_img.jpg');background-size:100% 100%;padding-top:10px;">

        <div class="container">
            <div class="row" style="">

                <div class="col-md-3  col-sm-6">
                    <h4>Kantor Pusat</h4>
                    <p>Gedung Insan Madani <br>
                        Jl.Kenanga, Maguwoharjo, Depok, Sleman <br>
                        Yogyakarta 55282
                    </p>
                </div>

                <div class="col-md-3  col-sm-6">
                    <h4>Showroom & Warehouse</h4>
                    <p>Jl. K.H. Hasyim Asy’ari, Srago, Mojayan, Klaten, Jawa Tengah</p>
                </div>

                <div class="col-md-3  col-sm-6">
                    <h4>Kontak</h4>
                    <p>Telp : (0274) 4332394 <br>
                        HP : 082328217888 <br>
                        E-mail : cs@insanmadani.com <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cs.insanmadani@yahoo.co.id
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cs.insanmadanionline@gmail.com
                    </p>
                </div>

                <div class="col-md-3  col-sm-6">
                    <h4>Sosial Media</h4>
                    <p>Facebook&nbsp;&nbsp;: PT. Pustaka insan Madani<br>
                        Twitter&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: @insanmadani_<br>
                        Instagram&nbsp;&nbsp;: pustakainsanmadani_official<br>
                        LinkedIn&nbsp;&nbsp;&nbsp;&nbsp;: PT. Pustaka insan Madani<br>
                    </p>
                </div>

                <div class="col-md-12" style="height:40px;text-align:center;color:#fff;padding-top:10px;">Copyright@2023
                    PT. Pustaka Insan Madani</div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="tesModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- header-->
                <div class="modal-header">
                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Lamar Posisi
                        <?php echo $row['nama_ps']; ?>
                    </h4>
                </div>
                <!--body-->
                <div class="modal-body">
                    <form action="proses_form.php" method="post" enctype="multipart/form-data" class="needs-validation"
                        novalidate>

                        <div class="form-group mt-4">
                            <?php
                            $pilih_posisi = $kode_ps;
                            $sql = "SELECT kode_ps, nama_ps FROM posisi WHERE kode_ps = '$pilih_posisi'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) { ?>
                                <?php while ($row2 = $result->fetch_assoc()) { ?>
                                    <input type="text" class="form-control" id="posisi" name="posisi"
                                        value="<?php echo $row2['kode_ps']; ?>" hidden>
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
                                <input type="radio" class="form-check-input" id="gender_laki" name="gender"
                                    value="Laki-Laki" required>
                                <label class="form-check-label" for="gender_laki">Laki-Laki</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="gender_perempuan" name="gender"
                                    value="Perempuan" required>
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
                            <input type="file" class="form-control-file" id="dokumen" name="dokumen" accept=".pdf"
                                required>
                            <div class="invalid-feedback">
                                Silakan unggah dokumen dalam format PDF.
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <button type="submut" name="submit" class="btn btn-primary">Kirim Lamaran</button>
                        </div>

                    </form>
                </div>
                <!--footer-->
                <!-- <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div> -->
            </div>
        </div>
    </div>


    <script>
        (function () {
            'use strict';

            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
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
            document.getElementById('submitData').addEventListener('click', function () {
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