<?php
$page = 'index';
include 'komponen/header.php';
include 'komponen/koneksi.php';

// Grafik menampilkan jumlah pelamar berdarkan posisi
$sql = "SELECT kode_ps, COUNT(*) AS jumlah_pelamar FROM pelamar2 GROUP BY kode_ps";
$result = $conn->query($sql);

$chartData = array('categories' => array(), 'data' => array());

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    array_push($chartData['categories'], $row["kode_ps"]);
    array_push($chartData['data'], (int)$row["jumlah_pelamar"]);
  }
} else {
  echo "0 results";
}



// Kueri SQL
$sqlRekomendasi = "SELECT rekomendasi, COUNT(*) AS jumlah_pelamar FROM pelamar2 GROUP BY rekomendasi";
$resultRekomendasi = $conn->query($sqlRekomendasi);

$chartDataRekomendasi = array('categories' => array(), 'data' => array());

$labelMapping = array(
  "yes" => "Lolos",
  "no" => "Tidak Lolos",
  "choose" => "Diproses"
);

if ($resultRekomendasi->num_rows > 0) {
  while ($row = $resultRekomendasi->fetch_assoc()) {
    // Mengubah label sesuai mapping
    $label = $labelMapping[$row["rekomendasi"]];
    array_push($chartDataRekomendasi['categories'], $label);
    array_push($chartDataRekomendasi['data'], (int)$row["jumlah_pelamar"]);
  }
} else {
  echo "0 results";
}






?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->\
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
                <h5 class="mb-0">Dashboard</h5>
              </div>
              <div class="card-body">
                <div class="row g-3">
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="avatar">
                        <div class="avatar-initial bg-primary rounded shadow">
                          <i class="fa-solid fa-briefcase"></i>
                        </div>
                      </div>
                      <div class="ms-3">
                        <div class="small mb-1">Posisi</div>
                        <h5 class="mb-0"><?php
                                          // Lakukan koneksi ke database Anda di sini

                                          // Query untuk menghitung jumlah posisi
                                          $query = "SELECT COUNT(*) AS total_posisi FROM posisi";

                                          // Eksekusi query
                                          $result = $conn->query($query);

                                          if ($result) {
                                            // Ambil hasil perhitungan
                                            $row = $result->fetch_assoc();
                                            $totalPosisi = $row['total_posisi'];
                                            echo $totalPosisi;
                                          } else {
                                            echo "Gagal mengambil data.";
                                          }
                                          ?>

                        </h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="avatar">
                        <div class="avatar-initial bg-warning rounded shadow">
                          <i class="fa-solid fa-briefcase"></i>
                        </div>
                      </div>
                      <div class="ms-3">
                        <div class="small mb-1">Pelamar</div>
                        <h5 class="mb-0">
                          <?php
                          // Lakukan koneksi ke database Anda di sini

                          // Query untuk menghitung jumlah posisi
                          $query = "SELECT COUNT(*) AS total_pelamar FROM pelamar2";

                          // Eksekusi query
                          $result = $conn->query($query);

                          if ($result) {
                            // Ambil hasil perhitungan
                            $row = $result->fetch_assoc();
                            $totalPosisi = $row['total_pelamar'];
                            echo $totalPosisi;
                          } else {
                            echo "Gagal mengambil data.";
                          }
                          ?>
                        </h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="avatar">
                        <div class="avatar-initial bg-success rounded shadow">
                          <i class="fa-solid fa-check"></i>
                        </div>
                      </div>
                      <div class="ms-3">
                        <div class="small mb-1">Pelamar Lolos</div>
                        <h5 class="mb-0"> <?php
                                          // Lakukan koneksi ke database Anda di sini

                                          // Query untuk menghitung jumlah posisi
                                          $query = "SELECT COUNT(*) AS total_pelamar FROM pelamar2 WHERE rekomendasi = 'yes'";

                                          // Eksekusi query
                                          $result = $conn->query($query);

                                          if ($result) {
                                            // Ambil hasil perhitungan
                                            $row = $result->fetch_assoc();
                                            $totalPosisi = $row['total_pelamar'];
                                            echo $totalPosisi;
                                          } else {
                                            echo "Gagal mengambil data.";
                                          }
                                          ?></h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="avatar">
                        <div class="avatar-initial bg-danger rounded shadow">
                          <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                      </div>
                      <div class="ms-3">
                        <div class="small mb-1">Pelamar Tidak Lolos</div>
                        <h5 class="mb-0">
                          <?php
                          // Lakukan koneksi ke database Anda di sini

                          // Query untuk menghitung jumlah posisi
                          $query = "SELECT COUNT(*) AS total_pelamar FROM pelamar2 WHERE rekomendasi = 'no'";

                          // Eksekusi query
                          $result = $conn->query($query);

                          if ($result) {
                            // Ambil hasil perhitungan
                            $row = $result->fetch_assoc();
                            $totalPosisi = $row['total_pelamar'];
                            echo $totalPosisi;
                          } else {
                            echo "Gagal mengambil data.";
                          }
                          ?>
                        </h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">

              <div class="col-12 col-md-12 col-lg-6">
                <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h6 class="mb-0">Presentase Pelamar Berdarkan Rekomendasi</h6>
                  </div>
                  <div class="card-body">
                    <div id="chartPie"></div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-6">
                <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h6 class="mb-0">Jumlah Pelamar Berdasarkan Rekomendasi</h6>
                  </div>
                  <div class="card-body">
                    <div id="chart"></div>
                  </div>
                </div>
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
  <script src="scripts/dashboard.js"></script>





  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.28.3/dist/apexcharts.min.js"></script>

  <script>
    // JavaScript using PHP data for ApexCharts
    var pelamarData = <?php echo json_encode($chartData); ?>;

    var options = {
      series: [{
        name: 'Jumlah Pelamar',
        data: pelamarData.data
      }],
      chart: {
        height: 350,
        type: 'bar'
      },
      xaxis: {
        categories: pelamarData.categories,
      }
    };

    var chart = new ApexCharts(document.querySelector("#chartPie"), options);
    chart.render();
  </script>
  <script>
    var options = {
      chart: {
        height: 360,
        type: 'pie',
      },
      series: <?php echo json_encode($chartDataRekomendasi['data']); ?>,
      labels: <?php echo json_encode($chartDataRekomendasi['categories']); ?>
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
  </script>

</body>

</html>