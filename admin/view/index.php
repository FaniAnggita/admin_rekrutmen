<?php
$page = 'index';
include 'komponen/header.php';
include 'komponen/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
  <?php
  include 'komponen/navbar2.php';
  ?>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  layout-without-menu">

    <div class="layout-container">


      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class=" container-xxl flex-grow-1 container-p-y">

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
                          $query = "SELECT COUNT(*) as total_pelamar
                          FROM pelamar2 pl
                          LEFT JOIN seleksi_administrasi sa ON pl.kode_pelamar = sa.id_pelamar
                          LEFT JOIN seleksi_wii sw ON pl.kode_pelamar = sw.id_pelamar
                          LEFT JOIN seleksi_psikotest sp ON pl.kode_pelamar = sp.id_pelamar
                          LEFT JOIN seleksi_indepth si ON pl.kode_pelamar = si.id_pelamar
                          LEFT JOIN seleksi_tesbidang st ON pl.kode_pelamar = st.id_pelamar
                          LEFT JOIN seleksi_interviewuser sin ON pl.kode_pelamar = sin.id_pelamar
                          LEFT JOIN pelamar_lolos pls ON pl.kode_pelamar = pls.id_pelamar
                          WHERE
                              -- Add your conditions here
                              sa.hasil_seleksi_adm = 'lolos'
                              AND sw.rating_wii = 'lolos'
                              AND sp.rating_psikotest = 'lolos'
                              AND si.hasilIndepth = 'lolos'
                              AND st.hasil_tb = 'lolos'
                              AND sin.hasil_iu = 'lolos';";

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
                          $query = "SELECT COUNT(*) as total_pelamar
                          FROM pelamar2 pl
                          LEFT JOIN seleksi_administrasi sa ON pl.kode_pelamar = sa.id_pelamar
                          LEFT JOIN seleksi_wii sw ON pl.kode_pelamar = sw.id_pelamar
                          LEFT JOIN seleksi_psikotest sp ON pl.kode_pelamar = sp.id_pelamar
                          LEFT JOIN seleksi_indepth si ON pl.kode_pelamar = si.id_pelamar
                          LEFT JOIN seleksi_tesbidang st ON pl.kode_pelamar = st.id_pelamar
                          LEFT JOIN seleksi_interviewuser sin ON pl.kode_pelamar = sin.id_pelamar
                          LEFT JOIN pelamar_lolos pls ON pl.kode_pelamar = pls.id_pelamar
                          WHERE
                              -- Add your conditions here
                              sa.hasil_seleksi_adm = 'tidak lolos'
                              OR sw.rating_wii = 'tidak lolos'
                              OR sp.rating_psikotest = 'tidak lolos'
                              OR si.hasilIndepth = 'tidak lolos'
                              OR st.hasil_tb = 'tidak lolos'
                              OR sin.hasil_iu = 'tidak lolos';
                          ";

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
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                      data-bs-target="#modalFilterDashboard">
                      <i class="fa-solid fa-filter"></i> Filter
                    </button>
                    <?php include_once 'modal/modal_filter_dashboard.php'; ?>
                  </div>
                  <div class="card-body table-responsive">
                    <table class="table table-bordered text-center">
                      <thead>
                        <tr>
                          <th colspan="6"></th>
                          <th colspan="4">Seleksi Administrasi</th>
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
                        // Filter tanggal
                        if (isset($_POST['start_date']) && isset($_POST['end_date']) && $_POST['start_date'] != '' && $_POST['end_date'] != '') {
                          $start_date = $_POST['start_date'];
                          $end_date = $_POST['end_date'];

                          // Tambahkan kondisi tanggal ke query SQL
                          $sql = "SELECT posisi.nama_ps, posisi.jumlah_kebutuhan, pelamar2.kode_ps, 
                          COUNT(*) as total_pelamar,
                          SUM(CASE WHEN seleksi_administrasi.hasil_seleksi_adm = 'lolos' THEN 1 ELSE 0 END) as jumlah_lolos_administrasi,
                          SUM(CASE WHEN seleksi_administrasi.hasil_seleksi_adm = 'tidak lolos' THEN 1 ELSE 0 END) as jumlah_tidak_lolos_administrasi,
                          SUM(CASE WHEN seleksi_administrasi.hasil_seleksi_adm = 'blm seleksi' THEN 1 ELSE 0 END) as jumlah_belum_seleksi_administrasi,
                          SUM(CASE WHEN seleksi_wii.rating_wii = 'lolos' THEN 1 ELSE 0 END) as jumlah_lolos_wii,
                          SUM(CASE WHEN seleksi_wii.rating_wii = 'tidak lolos' THEN 1 ELSE 0 END) as jumlah_tidak_lolos_wii,
                          SUM(CASE WHEN seleksi_wii.rating_wii = 'blm dijadwalkan' THEN 1 ELSE 0 END) as blm_dijadwalkan_wii,
                          SUM(CASE WHEN seleksi_psikotest.rating_psikotest = 'lolos' THEN 1 ELSE 0 END) as jumlah_lolos_psikotest,
                          SUM(CASE WHEN seleksi_psikotest.rating_psikotest = 'tidak lolos' THEN 1 ELSE 0 END) as jumlah_tidak_lolos_psikotest,
                          SUM(CASE WHEN seleksi_psikotest.rating_psikotest = 'dlm proses' THEN 1 ELSE 0 END) as jumlah_dlm_proses_psikotest,
                          SUM(CASE WHEN seleksi_psikotest.rating_psikotest = 'tdk psikotest' THEN 1 ELSE 0 END) as jumlah_tdk_psikotest,
                          SUM(CASE WHEN seleksi_indepth.hasilIndepth = 'lolos' THEN 1 ELSE 0 END) as jumlah_lolos_indepth,
                          SUM(CASE WHEN seleksi_indepth.hasilIndepth = 'tidak lolos' THEN 1 ELSE 0 END) as jumlah_tidak_lolos_indepth,
                          SUM(CASE WHEN seleksi_indepth.hasilIndepth = 'blm dijadwalkan' THEN 1 ELSE 0 END) as blm_dijadwalkan,
                          SUM(CASE WHEN seleksi_interviewuser.hasil_iu = 'lolos' THEN 1 ELSE 0 END) as jumlah_lolos_interviewuser,
                          SUM(CASE WHEN seleksi_interviewuser.hasil_iu = 'tidak lolos' THEN 1 ELSE 0 END) as jumlah_tidak_lolos_interviewuser,
                          SUM(CASE WHEN seleksi_interviewuser.hasil_iu = 'blm dijadwalkan' THEN 1 ELSE 0 END) as blm_dijadwalkan_interviewuser
                          FROM pelamar2
                          JOIN posisi ON pelamar2.kode_ps = posisi.kode_ps
                          LEFT JOIN seleksi_administrasi ON pelamar2.kode_pelamar = seleksi_administrasi.id_pelamar
                          LEFT JOIN seleksi_wii ON pelamar2.kode_pelamar = seleksi_wii.id_pelamar
                          LEFT JOIN seleksi_psikotest ON pelamar2.kode_pelamar = seleksi_psikotest.id_pelamar
                          LEFT JOIN seleksi_indepth ON pelamar2.kode_pelamar = seleksi_indepth.id_pelamar
                          LEFT JOIN seleksi_interviewuser ON pelamar2.kode_pelamar = seleksi_interviewuser.id_pelamar
                          WHERE
                              pelamar2.time BETWEEN '$start_date' AND '$end_date'
                          GROUP BY pelamar2.kode_ps";
                        } else {
                          // Query tanpa filter tanggal
                          $sql = "SELECT posisi.nama_ps, posisi.jumlah_kebutuhan, pelamar2.kode_ps, 
                          COUNT(*) as total_pelamar,
                          SUM(CASE WHEN seleksi_administrasi.hasil_seleksi_adm = 'lolos' THEN 1 ELSE 0 END) as jumlah_lolos_administrasi,
                          SUM(CASE WHEN seleksi_administrasi.hasil_seleksi_adm = 'tidak lolos' THEN 1 ELSE 0 END) as jumlah_tidak_lolos_administrasi,
                          SUM(CASE WHEN seleksi_administrasi.hasil_seleksi_adm = 'blm seleksi' THEN 1 ELSE 0 END) as jumlah_belum_seleksi_administrasi,
                          SUM(CASE WHEN seleksi_wii.rating_wii = 'lolos' THEN 1 ELSE 0 END) as jumlah_lolos_wii,
                          SUM(CASE WHEN seleksi_wii.rating_wii = 'tidak lolos' THEN 1 ELSE 0 END) as jumlah_tidak_lolos_wii,
                          SUM(CASE WHEN seleksi_wii.rating_wii = 'blm dijadwalkan' THEN 1 ELSE 0 END) as blm_dijadwalkan_wii,
                          SUM(CASE WHEN seleksi_psikotest.rating_psikotest = 'lolos' THEN 1 ELSE 0 END) as jumlah_lolos_psikotest,
                          SUM(CASE WHEN seleksi_psikotest.rating_psikotest = 'tidak lolos' THEN 1 ELSE 0 END) as jumlah_tidak_lolos_psikotest,
                          SUM(CASE WHEN seleksi_psikotest.rating_psikotest = 'dlm proses' THEN 1 ELSE 0 END) as jumlah_dlm_proses_psikotest,
                          SUM(CASE WHEN seleksi_psikotest.rating_psikotest = 'tdk psikotest' THEN 1 ELSE 0 END) as jumlah_tdk_psikotest,
                          SUM(CASE WHEN seleksi_indepth.hasilIndepth = 'lolos' THEN 1 ELSE 0 END) as jumlah_lolos_indepth,
                          SUM(CASE WHEN seleksi_indepth.hasilIndepth = 'tidak lolos' THEN 1 ELSE 0 END) as jumlah_tidak_lolos_indepth,
                          SUM(CASE WHEN seleksi_indepth.hasilIndepth = 'blm dijadwalkan' THEN 1 ELSE 0 END) as blm_dijadwalkan,
                          SUM(CASE WHEN seleksi_interviewuser.hasil_iu = 'lolos' THEN 1 ELSE 0 END) as jumlah_lolos_interviewuser,
                          SUM(CASE WHEN seleksi_interviewuser.hasil_iu = 'tidak lolos' THEN 1 ELSE 0 END) as jumlah_tidak_lolos_interviewuser,
                          SUM(CASE WHEN seleksi_interviewuser.hasil_iu = 'blm dijadwalkan' THEN 1 ELSE 0 END) as blm_dijadwalkan_interviewuser
                          FROM pelamar2
                          JOIN posisi ON pelamar2.kode_ps = posisi.kode_ps
                          LEFT JOIN seleksi_administrasi ON pelamar2.kode_pelamar = seleksi_administrasi.id_pelamar
                          LEFT JOIN seleksi_wii ON pelamar2.kode_pelamar = seleksi_wii.id_pelamar
                          LEFT JOIN seleksi_psikotest ON pelamar2.kode_pelamar = seleksi_psikotest.id_pelamar
                          LEFT JOIN seleksi_indepth ON pelamar2.kode_pelamar = seleksi_indepth.id_pelamar
                          LEFT JOIN seleksi_interviewuser ON pelamar2.kode_pelamar = seleksi_interviewuser.id_pelamar
                          GROUP BY pelamar2.kode_ps;";
                        }

                        $result = $conn->query($sql);

                        $i = 1;
                        $total_pelamar = 0;
                        // Administrasi
                        $total_lolos_admin = 0;
                        $total_tidak_lolos_admin = 0;
                        $total_belum_seleksi_administrasi = 0;

                        // WII
                        $total_lolos_wii = 0;
                        $total_tidak_lolos_wii = 0;
                        $total_belum_dijadwalkan_wii = 0;

                        // Psikotest
                        $total_lolos_psikotest = 0;
                        $total_tidak_lolos_psikotest = 0;
                        $total_dalam_proses_psikotest = 0;
                        $total_tidak_psikotest = 0;

                        // Indepth
                        $total_lolos_indepth = 0;
                        $total_tidak_lolos_indepth = 0;
                        $total_belum_dijadwalkan_indepth = 0;

                        // Interview User
                        $total_lolos_iu = 0;
                        $total_tidak_lolos_iu = 0;
                        $total_belum_dijadwalkan_iu = 0;

                        if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {

                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $row['nama_ps'] . "</td>";
                            echo "<td>" . $row['kode_ps'] . "</td>";
                            echo "<td>  PIM </td>";
                            echo "<td>" . $row['jumlah_kebutuhan'] . "</td>";
                            echo "<td>" . $row['total_pelamar'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_administrasi'] . "</td>";
                            echo "<td>" . $row['jumlah_tidak_lolos_administrasi'] . "</td>";
                            echo "<td>" . $row['jumlah_belum_seleksi_administrasi'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_administrasi'] + $row['jumlah_tidak_lolos_administrasi'] + $row['jumlah_belum_seleksi_administrasi'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_wii'] . "</td>";
                            echo "<td>" . $row['jumlah_tidak_lolos_wii'] . "</td>";
                            echo "<td>" . $row['blm_dijadwalkan_wii'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_wii'] + $row['jumlah_tidak_lolos_wii'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_psikotest'] . "</td>";
                            echo "<td>" . $row['jumlah_tidak_lolos_psikotest'] . "</td>";
                            echo "<td>" . $row['jumlah_dlm_proses_psikotest'] . "</td>";
                            echo "<td>" . $row['jumlah_tdk_psikotest'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_psikotest'] + $row['jumlah_tidak_lolos_psikotest'] + $row['jumlah_dlm_proses_psikotest'] + $row['jumlah_dlm_proses_psikotest'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_indepth'] . "</td>";
                            echo "<td>" . $row['jumlah_tidak_lolos_indepth'] . "</td>";
                            echo "<td>" . $row['blm_dijadwalkan'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_indepth'] + $row['jumlah_tidak_lolos_indepth'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_interviewuser'] . "</td>";
                            echo "<td>" . $row['jumlah_tidak_lolos_interviewuser'] . "</td>";
                            echo "<td>" . $row['blm_dijadwalkan_interviewuser'] . "</td>";
                            echo "<td>" . $row['jumlah_lolos_interviewuser'] + $row['jumlah_tidak_lolos_interviewuser'] . "</td>";

                            // hitung total
                            $total_pelamar += $row['total_pelamar'];

                            // administrasi
                            $total_lolos_admin += $row['jumlah_lolos_administrasi'];
                            $total_tidak_lolos_admin += $row['jumlah_tidak_lolos_administrasi'];
                            $total_belum_seleksi_administrasi += $row['jumlah_belum_seleksi_administrasi'];

                            // WII
                            $total_lolos_wii += $row['jumlah_lolos_wii'];
                            $total_tidak_lolos_wii += $row['jumlah_tidak_lolos_wii'];
                            $total_belum_dijadwalkan_wii += $row['blm_dijadwalkan_wii'];

                            // Psikotest
                            $total_lolos_psikotest += $row['jumlah_lolos_psikotest'];
                            $total_tidak_lolos_psikotest += $row['jumlah_tidak_lolos_psikotest'];
                            $total_dalam_proses_psikotest += $row['jumlah_dlm_proses_psikotest'];
                            $total_tidak_psikotest += $row['jumlah_tdk_psikotest'];

                            // Indepth
                            $total_lolos_indepth += $row['jumlah_lolos_indepth'];
                            $total_tidak_lolos_indepth += $row['jumlah_tidak_lolos_indepth'];
                            $total_belum_dijadwalkan_indepth = $row['blm_dijadwalkan'];

                            // Interview User
                            $total_lolos_iu += $row['jumlah_lolos_interviewuser'];
                            $total_tidak_lolos_iu += $row['jumlah_tidak_lolos_interviewuser'];
                            $total_belum_dijadwalkan_iu = 0;
                            echo "</tr>";
                            $i++;
                          }
                        }
                        ?>
                      </tbody>
                      <tfoot>
                        <tr class="text-center">
                          <td colspan="5"><b>Total</b></td>
                          <td class='text-center fw-bold'>
                            <?php echo $total_pelamar; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_lolos_admin; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_tidak_lolos_admin; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_belum_seleksi_administrasi; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_lolos_admin + $total_tidak_lolos_admin + $total_belum_seleksi_administrasi; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_lolos_wii; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_tidak_lolos_wii; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_belum_dijadwalkan_wii; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_lolos_wii + $total_tidak_lolos_wii + $total_belum_dijadwalkan_wii; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_lolos_psikotest; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_tidak_lolos_psikotest; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_dalam_proses_psikotest; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_tidak_psikotest; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_lolos_psikotest + $total_tidak_lolos_psikotest + $total_dalam_proses_psikotest + $total_tidak_psikotest; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_lolos_indepth; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_tidak_lolos_indepth; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_belum_dijadwalkan_indepth; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_lolos_indepth + $total_tidak_lolos_indepth + $total_belum_dijadwalkan_indepth; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_lolos_iu; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_tidak_lolos_iu; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_belum_dijadwalkan_iu; ?>
                          </td>
                          <td class="text-center fw-bold">
                            <?php echo $total_lolos_iu + $total_tidak_lolos_iu + $total_belum_dijadwalkan_iu; ?>
                          </td>
                        </tr>
                      </tfoot>
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
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.table').DataTable({

        fixedColumns: {
          left: 3,
        },

        scrollX: true,
        dom: 'Blfrtip',
        buttons: [
          'excelHtml5',
        ],
        lengthMenu: [10, 25, 50, 1200], // Specify the available page lengths
        pageLength: 10 // Set the initial page length
      });
    });
  </script>

</body>

</html>