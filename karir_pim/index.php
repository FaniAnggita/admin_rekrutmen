<?php require_once 'koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>
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
    <link href="https://insanmadani.com/rekrutmen/assets/css/bootstrap-3.1.1.min.css" rel='stylesheet'
        type='text/css' />
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
                        <a href="https://insanmadani.com/rekrutmen/index.php/Main"><i class="fa fa-home"></i>
                            BERANDA</a>
                    </li>
                    <li>
                        <a href="https://insanmadani.com/rekrutmen/index.php/Main/lowongan"><i class="fa fa-book"></i>
                            INFO LOWONGAN KERJA</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="https://forms.gle/w8urtKPBYWxsrjKE9" target="_blank" style="cursor:pointer"
                            id="head_registrasi"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            Mendaftar</a>
                    </li>
                    <li class="">
                        <!--<a href="https://insanmadani.com/rekrutmen/rec/" style="cursor:pointer" id="head_registrasi"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a>                </li>-->
                </ul>
            </nav>
        </div>
    </nav>
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="#">
                        <img src="https://insanmadani.com/rekrutmen/images/slider/Konten Website PIM CAREER LOWKER-01.jpg"
                            width="100%" alt="PT.Penerbit Erlangga Group">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="https://insanmadani.com/rekrutmen/images/slider/Konten Website PIM CAREER LOWKER-02.jpg"
                            width="100%" alt="PT.Penerbit Erlangga Group">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="https://insanmadani.com/rekrutmen/images/slider/Konten Website PIM CAREER LOWKER-03.jpg"
                            width="100%" alt="PT.Penerbit Erlangga Group">
                    </a>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="https://erlanggajobs.com/#myCarousel" role="button"
                data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="https://erlanggajobs.com/#myCarousel" role="button"
                data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="single row">


            <div class="col-md-4">
                <div class="col_3">
                    <img src="https://insanmadani.com/template/images/logo_main.png" alt="" width="200">
                    <br>
                    <p style="text-align: justify;">PT Pustaka Insan Madani adalah perusahaan swasta yang bergerak di
                        bidang penyediaan peralatan pendidikan, perkakas, dan komputer yang didirikan di Sleman pada
                        tahun 2005. Sejak berdiri, perusahaan kami terus berkembang dan bergerak dinamis dalam usaha
                        penyediaan sarana pendidikan dan sarana perkantoran. Memulai usaha sebagai lembaga penerbitan
                        buku, kini kami pun melakukan pengembangan, produksi, dan distribusi berbagai jenis produk
                        peralatan pendidikan. Tak hanya itu, keinginan memberikan pelayanan terbaik kepada pelanggan
                        mendorong kami merambah bisnis produk perkakas dan komputer yang didedikasikan untuk memenuhi
                        kebutuhan industri, rumah tangga, dan perkantoran.</p>

                    <p style="text-align: justify;">Selama 16 tahun berkiprah, kami terus tumbuh dengan melakukan
                        berbagai pengembangan produk dan strategi bisnis hingga kini menjadi salah satu penyedia
                        peralatan pendidikan, perkakas dan komputer yang dikenal luas di tanah air. Dengan komitmen yang
                        tinggi, kami juga berinvestasi pada peningkatan kualitas sumber daya manusia, infrastruktur, dan
                        fasilitas kerja demi menjamin ketersediaan peralatan pendidikan, perkakas, dan komputer yang
                        inovatif serta berstandar mutu tinggi. Kami melayani pembelian secara online dan offline untuk
                        pelanggan individu (B2C), instansi pemerintah (B2G), maupun korporasi (B2B).</p>

                    <!-- <a href="https://forms.gle/w8urtKPBYWxsrjKE9" target="_blank" class="btn btn-warning btn-block">Mendaftar Sekarang</a> -->

                </div>
            </div>


            <div class="col-md-8 single_right">
                <div class="but_list">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab"
                                    data-toggle="tab" aria-controls="home" aria-expanded="true">Daftar Lowongan
                                    Terbaru</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                <div class="tab_grid">
                                    <?php
                                    $sql = "SELECT * FROM lowongan_baru JOIN posisi USING(kode_ps) WHERE status = 1";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <div class="col-sm-12">
                                                <div class="location_box1">
                                                    <h6> <a href="detail_lowongan.php?kode_ps=<?php echo $row['kode_ps']; ?>">
                                                            <?php echo $row['nama_ps']; ?>
                                                        </a><span class="m_1"> dibuka sampai
                                                            <?php
                                                            $tenggatDaftar = $row['tenggat_daftar'];
                                                            $formattedDate = date('d-m-Y', strtotime($tenggatDaftar));
                                                            echo $formattedDate;
                                                            ?>
                                                        </span></h6>
                                                    <p><span class="m_2">Deskripsi : </span>
                                                        <?php
                                                        $deskripsi = strip_tags($row['deskripsi']); // Menghapus tag HTML
                                                        echo substr($deskripsi, 0, 200) . "..."; // Menampilkan 150 karakter pertama
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                            <hr>
                                            <?php

                                        }
                                    }
                                    ?>




                                </div>
                            </div>
                        </div>
                    </div>
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
</body>
<script type="text/javascript" src="https://insanmadani.com/rekrutmen/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="https://insanmadani.com/rekrutmen/assets/js/bootstrap.min.js"></script>
<script src="https://insanmadani.com/rekrutmen/assets/plugins/node-waves/waves.js"></script>
<script src="https://insanmadani.com/rekrutmen/assets/js/sweetalert2.all.min.js"></script>
<script type="text/javascript">
</script>

</html>