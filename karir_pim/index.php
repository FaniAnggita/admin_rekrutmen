<?php require_once 'komponen/head.php'; ?>

<body>

  <!-- ======= Header ======= -->
  <?php require_once 'komponen/header.php'; ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Build Your Career With Us!</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Kami mengundang anda yang inovatif, dinamis, dan potensial untuk
            maju dan berkembang bersama kami.</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#services" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Join Now</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/features.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h2>Tentang Kami</h2>

              <p>
                PT Pustaka Insan Madani adalah perusahaan swasta yang bergerak di bidang penyediaan peralatan
                pendidikan, perkakas, dan komputer yang didirikan di Sleman pada tahun 2005. Sejak berdiri, perusahaan
                kami terus berkembang dan bergerak dinamis dalam usaha penyediaan sarana pendidikan dan sarana
                perkantoran. Memulai usaha sebagai lembaga penerbitan buku, kini kami pun melakukan pengembangan,
                produksi, dan distribusi berbagai jenis produk peralatan pendidikan. Tak hanya itu, keinginan memberikan
                pelayanan terbaik kepada pelanggan mendorong kami merambah bisnis produk perkakas dan komputer yang
                didedikasikan untuk memenuhi kebutuhan industri, rumah tangga, dan perkantoran.
              </p>

              <p>
                Selama 16 tahun berkiprah, kami terus tumbuh dengan melakukan berbagai pengembangan produk dan strategi
                bisnis hingga kini menjadi salah satu penyedia peralatan pendidikan, perkakas dan komputer yang dikenal
                luas di tanah air. Dengan komitmen yang tinggi, kami juga berinvestasi pada peningkatan kualitas sumber
                daya manusia, infrastruktur, dan fasilitas kerja demi menjamin ketersediaan peralatan pendidikan,
                perkakas, dan komputer yang inovatif serta berstandar mutu tinggi. Kami melayani pembelian secara online
                dan offline untuk pelanggan individu (B2C), instansi pemerintah (B2G), maupun korporasi (B2B).
              </p>
              <div class="text-center text-lg-start">
                <a href="https://www.insanmadani.com/profil" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Selengkapnya</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/features-2.png" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header ">
          <!-- <h2>Lowongan Kerja</h2> -->
          <div class="row">
            <p class="col-lg-8 col-md-6 text-lg-start">Lowongan Kerja</p>

            <form action="" class="col-lg-4 col-md-6 mt-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari lowongan.." aria-label="Cari lowongan..." aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" id="button-addon2">Cari</button>
              </div>
            </form>
          </div>

        </header>

        <div class="row gy-4">
          <?php
          require_once('koneksi.php');
          $sql = "SELECT * FROM lowongan_baru JOIN posisi USING(kode_ps) WHERE status = 1";
          $result = $conn->query($sql);
          $i = 0;
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
          ?>
              <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box blue text-start">

                  <div class="row">
                    <div class="col lg-6">
                      <div style="height: 90px;">
                        <h3>
                          <a href="detail_lowongan.php?kode_ps=<?php echo $row['kode_ps']; ?>"> <?php echo $row['nama_ps']; ?></a>
                        </h3>
                      </div>

                    </div>
                    <div class="col lg-6 text-end">
                      <span style="font-size:10px;">Buka hingga
                        <?php
                        $tenggatDaftar = $row['tenggat_daftar'];
                        $formattedDate = date('d-m-Y', strtotime($tenggatDaftar));
                        echo $formattedDate;
                        ?>

                      </span><br>
                    </div>
                  </div>
                  <p>
                    <?php
                    $deskripsi = strip_tags($row['deskripsi']); // Menghapus tag HTML
                    echo substr($deskripsi, 0, 150) . "..."; // Menampilkan 150 karakter pertama
                    ?>
                  </p>
                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop<?php echo $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">
                            <?php echo $row['nama_ps']; ?>
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <h4>Deskripsi</h4>
                          <p>
                            <?php echo $row['deskripsi']; ?>
                          </p>

                          <h4>Kualifikasi</h4>
                          <p>
                            <?php echo $row['kualifikasi']; ?>
                          </p>



                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                          <a href="form.php?pilih_posisi=<?php echo $row['kode_ps']; ?>" class="btn btn-primary">Lamar
                            Sekarang</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <?php
              $i++;
            }
          }
          ?>






        </div>

      </div>

    </section><!-- End Services Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require_once 'komponen/footer.php'; ?>
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

</body>

</html>