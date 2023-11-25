<?php
$page = 'index';
include 'komponen/header.php';
include 'komponen/koneksi.php';

// Grafik menampilkan jumlah pelamar berdarkan posisi
$sql = "SELECT kode_ps, COUNT(*) AS jumlah_pelamar FROM pelamar2 GROUP BY kode_ps ORDER BY jumlah_pelamar LIMIT 5";
$result = $conn->query($sql);

$chartData = array('categories' => array(), 'data' => array());

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    array_push($chartData['categories'], $row["kode_ps"]);
    array_push($chartData['data'], (int) $row["jumlah_pelamar"]);
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
    array_push($chartDataRekomendasi['data'], (int) $row["jumlah_pelamar"]);
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
                        <h5 class="mb-0">
                          <?php
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
                        <h5 class="mb-0">
                          <?php
                          // Lakukan koneksi ke database Anda di sini
                          
                          // Query untuk menghitung jumlah posisi
                          $query = "SELECT COUNT(*) AS total_pelamar FROM pelamar2 WHERE status_hasil_akhir = 'Lolos'";

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
                          $query = "SELECT COUNT(*) AS total_pelamar FROM pelamar2 WHERE status_hasil_akhir = 'Tidak Lolos'";

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

              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h6 class="mb-0">Laporan Proses Rekrutmen</h6>
                    <a href="#" class="btn btn-primary btn-sm" id="showModal">Cetak <i class="bx bx-printer"></i></a>

                  </div>
                  <div class="card-body table-responsive">
                    <table class="table table-bordered text-center">
                      <thead>
                        <tr>
                          <th colspan="5"></th>
                          <th colspan="5">Seleksi Administrasi</th>
                          <th colspan="4">Walk in Interview</th>
                          <th colspan="5">Psikotest</th>
                          <th colspan="4">Wawancara HRD</th>
                          <th colspan="4">Wawancara User</th>
                        </tr>
                        <tr>
                          <th>No.</th>
                          <th>Posisi</th>
                          <th>Kode Posisi</th>
                          <th>PT</th>
                          <th>Total Kebutuhan</th>
                          <th>Total Pelamar</th>
                          <th>Lolos</th>
                          <th>Tidak Lolos</th>
                          <th>Belum Diseleksi</th>
                          <th>Total</th>
                          <th>Lolos</th>
                          <th>Tidak Lolos</th>
                          <th>Belum Dijadwalkan</th>
                          <th>Total</th>
                          <th>Lolos</th>
                          <th>Tidak Lolos</th>
                          <th>Dalam Proses</th>
                          <th>Tidak Psikotest</th>
                          <th>Total</th>
                          <th>Lolos</th>
                          <th>Tidak Lolos</th>
                          <th>Belum Dijadwalkan</th>
                          <th>Total</th>
                          <th>Lolos</th>
                          <th>Tidak Lolos</th>
                          <th>Belum Dijadwalkan</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                        // Ambil data dari database dan tampilkan dalam tabel
                        $sql = "SELECT
                          p.kode_ps,
                          posisi.nama_ps,
                          COUNT(CASE WHEN sa.hasil_seleksi_adm = 'lolos' THEN 1 END) AS jumlah_lolos_admin,
                          COUNT(CASE WHEN sa.hasil_seleksi_adm = 'tidak lolos' THEN 1 END) AS jumlah_tidak_lolos_admin,
                          COUNT(CASE WHEN sa.hasil_seleksi_adm = 'pilih' THEN 1 END) AS jumlah_pilih_admin,
                          COUNT(CASE WHEN sw.rating_wii = 'lolos' THEN 1 END) AS jumlah_lolos_wii,
                          COUNT(CASE WHEN sw.rating_wii = 'tidak lolos' THEN 1 END) AS jumlah_tidak_lolos_wii,
                          COUNT(CASE WHEN sw.rating_wii = 'pilih' THEN 1 END) AS jumlah_pilih_wii,
                          COUNT(CASE WHEN sp.rating_psikotest = 'lolos' THEN 1 END) AS jumlah_lolos_psikotest,
                          COUNT(CASE WHEN sp.rating_psikotest = 'tidak lolos' THEN 1 END) AS jumlah_tidak_lolos_psikotest,
                          COUNT(CASE WHEN sp.rating_psikotest = 'pilih' THEN 1 END) AS jumlah_pilih_psikotest,
                          COUNT(CASE WHEN si.hasilIndepth = 'lolos' THEN 1 END) AS jumlah_lolos_indepth,
                          COUNT(CASE WHEN si.hasilIndepth = 'tidak lolos' THEN 1 END) AS jumlah_tidak_lolos_indepth,
                          COUNT(CASE WHEN si.hasilIndepth = 'pilih' THEN 1 END) AS jumlah_pilih_indepth,
                          COUNT(CASE WHEN st.hasil_tb = 'lolos' THEN 1 END) AS jumlah_lolos_tesbidang,
                          COUNT(CASE WHEN st.hasil_tb = 'tidak lolos' THEN 1 END) AS jumlah_tidak_lolos_tesbidang,
                          COUNT(CASE WHEN st.hasil_tb = 'pilih' THEN 1 END) AS jumlah_pilih_tesbidang,
                          COUNT(CASE WHEN sin.hasil_iu = 'lolos' THEN 1 END) AS jumlah_lolos_interviewuser,
                          COUNT(CASE WHEN sin.hasil_iu = 'tidak lolos' THEN 1 END) AS jumlah_tidak_lolos_interviewuser,
                          COUNT(CASE WHEN sin.hasil_iu = 'pilih' THEN 1 END) AS jumlah_pilih_interviewuser
                        FROM
                            pelamar2 p
                        JOIN seleksi_administrasi sa ON p.id = sa.id_pelamar
                        JOIN seleksi_wii sw ON p.id = sw.id_pelamar
                        JOIN seleksi_psikotest sp ON p.id = sp.id_pelamar
                        JOIN seleksi_indepth si ON p.id = si.id_pelamar
                        JOIN seleksi_tesbidang st ON p.id = st.id_pelamar
                        JOIN seleksi_interviewuser sin ON p.id = sin.id_pelamar
                        JOIN posisi ON p.kode_ps = posisi.kode_ps
                        GROUP BY
                            p.kode_ps, posisi.nama_ps;
                    ";

                        $result = $conn->query($sql);
                        $i = 0;
                        if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $row['nama_ps'] . "</td>";
                            echo "<td>" . $row['kode_ps'] . "</td>";
                            echo "<td>  PIM </td>";
                            echo "<td> - </td>";
                            echo "<td>" . $row['jumlah_lolos_admin'] + $row['jumlah_tidak_lolos_admin'] + $row['jumlah_pilih_admin'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_admin'] . "</td>";
                            echo "<td>" . $row['jumlah_tidak_lolos_admin'] . "</td>";
                            echo "<td>" . $row['jumlah_pilih_admin'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_admin'] + $row['jumlah_tidak_lolos_admin'] + $row['jumlah_pilih_admin'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_wii'] . "</td>";
                            echo "<td>" . $row['jumlah_tidak_lolos_wii'] . "</td>";
                            echo "<td>" . $row['jumlah_pilih_wii'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_wii'] + $row['jumlah_tidak_lolos_wii'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_psikotest'] . "</td>";
                            echo "<td>" . $row['jumlah_tidak_lolos_psikotest'] . "</td>";
                            echo "<td>" . $row['jumlah_pilih_psikotest'] . "</td>";
                            echo "<td> - </td>";
                            echo "<td>" . $row['jumlah_lolos_psikotest'] + $row['jumlah_tidak_lolos_psikotest'] + $row['jumlah_pilih_psikotest'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_indepth'] . "</td>";
                            echo "<td>" . $row['jumlah_tidak_lolos_indepth'] . "</td>";
                            echo "<td>" . $row['jumlah_pilih_indepth'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_indepth'] + $row['jumlah_tidak_lolos_indepth'] + $row['jumlah_pilih_indepth'] . "</td>";
                            echo "<td>" . $row['jumlah_pilih_tesbidang'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_interviewuser'] . "</td>";
                            echo "<td>" . $row['jumlah_tidak_lolos_interviewuser'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_interviewuser'] + $row['jumlah_tidak_lolos_interviewuser'] + $row['jumlah_tidak_lolos_interviewuser'] . "</td>";
                            echo "</tr>";
                            $i++;
                          }
                        }
                        ?>
                      </tbody>
                    </table>
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

  <!-- Bootstrap and jQuery scripts -->

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- DataTables JavaScript -->
  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

  <script>
    $(document).ready(function () {
      $('.table').DataTable({
        scrollX: true,
      });
    });
  </script>

</body>

</html>