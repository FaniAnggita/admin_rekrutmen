<?php
$page = 'proses_rekrut';
include 'komponen/header.php';
include 'komponen/koneksi.php';
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
                                <h5 class="mb-0">Proses Rekrutmen</h5>
                                <a href="proses_rekrutmen.php" class="btn btn-danger btn-sm"> <i class="bx bx-left-arrow-alt"></i> Kembali</a>
                            </div>
                            <div class="card-body mb-0 mt-0 pb-0 pt-0">
                                <div class="alert alert-primary" role="alert">

                                    <?php
                                    $id_pelamar = $_GET['id_pelamar'];
                                    $sql = "SELECT * FROM pelamar2 WHERE id = $id_pelamar";
                                    $result = $conn->query($sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['id'] . " - " . $row['nama_lengkap'] . " - " . $row['kode_ps'];
                                    ?>
                                    <?php
                                    $sql_amd = "SELECT * FROM seleksi_administrasi WHERE id_pelamar = $id_pelamar";
                                    $result_amd = $conn->query($sql_amd);
                                    $row_amd = mysqli_fetch_assoc($result_amd);
                                    ?>
                                    <?php
                                    // Retrieve data from the database for WII form
                                    $sql_wii = "SELECT * FROM seleksi_wii WHERE id_pelamar = $id_pelamar";
                                    $result_wii = $conn->query($sql_wii);
                                    $row_wii = mysqli_fetch_assoc($result_wii);
                                    ?>
                                    <?php
                                    // Retrieve data from the database for Psikotest form
                                    $sql_psikotest = "SELECT * FROM seleksi_psikotest WHERE id_pelamar = $id_pelamar";
                                    $result_psikotest = $conn->query($sql_psikotest);
                                    $row_psikotest = mysqli_fetch_assoc($result_psikotest);
                                    ?>
                                    <?php
                                    // Retrieve data from the database for Indepth form
                                    $sql_indepth = "SELECT * FROM seleksi_indepth WHERE id_pelamar = $id_pelamar";
                                    $result_indepth = $conn->query($sql_indepth);
                                    $row_indepth = mysqli_fetch_assoc($result_indepth);
                                    ?>
                                    <?php
                                    // Retrieve data from the database for Tes Bidang form
                                    $sql_tes_bidang = "SELECT * FROM seleksi_tesbidang WHERE id_pelamar = $id_pelamar";
                                    $result_tes_bidang = $conn->query($sql_tes_bidang);
                                    $row_tes_bidang = mysqli_fetch_assoc($result_tes_bidang);
                                    ?>
                                    <?php
                                    // Retrieve data from the database for Interview User form
                                    $sql_interview_user = "SELECT * FROM seleksi_interviewuser WHERE id_pelamar = $id_pelamar";
                                    $result_interview_user = $conn->query($sql_interview_user);
                                    $row_interview_user = mysqli_fetch_assoc($result_interview_user);
                                    ?>
                                    <?php
                                    // Retrieve data from the database for Interview User form
                                    $sql_hasil_akhir = "SELECT * FROM pelamar_lolos WHERE id_pelamar = $id_pelamar";
                                    $result_hasil_akhir = $conn->query($sql_hasil_akhir);
                                    $row_hasil_akhir = mysqli_fetch_assoc($result_hasil_akhir);
                                    ?>

                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-administrasi-tab" data-bs-toggle="pill" data-bs-target="#pills-administrasi" type="button" role="tab" aria-controls="pills-administrasi" aria-selected="true"><i class="fas fa-envelope mx-1"></i> Administrasi <?php echo isset($row_amd['hasil_seleksi_adm']) && $row_amd['hasil_seleksi_adm'] === 'lolos' ? '<i class="fa-solid fa-circle-check fa-xs" style="color: #00d13f;"></i>' : ''; ?></button>

                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-wii-tab" data-bs-toggle="pill" data-bs-target="#pills-wii" type="button" role="tab" aria-controls="pills-wii" aria-selected="false"><i class="fa-regular fa-comments"></i> WII <?php echo isset($row_wii['rating_wii']) && $row_wii['rating_wii'] === '1' ? '<i class="fa-solid fa-circle-check fa-xs" style="color: #00d13f;"></i>' : ''; ?></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fa-solid fa-pen"></i> Psikotest <?php echo isset($row_psikotest['rating_psikotest']) && $row_psikotest['rating_psikotest'] === 'lolos' ? '<i class="fa-solid fa-circle-check fa-xs" style="color: #00d13f;"></i>' : ''; ?></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-indepth-tab" data-bs-toggle="pill" data-bs-target="#pills-indepth" type="button" role="tab" aria-controls="pills-indepth" aria-selected="false"><i class="fa-regular fa-comments"></i> Indepth <?php echo isset($row_indepth['hasilIndepth']) && $row_indepth['hasilIndepth'] === 'lolos' ? '<i class="fa-solid fa-circle-check fa-xs" style="color: #00d13f;"></i>' : ''; ?></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-tesBidang-tab" data-bs-toggle="pill" data-bs-target="#pills-tesBidang" type="button" role="tab" aria-controls="pills-tesBidang" aria-selected="false"><i class="fa-solid fa-laptop-file"></i> Tes Bidang <?php echo isset($row_tes_bidang['hasil_tb']) && $row_tes_bidang['hasil_tb'] === 'lolos' ? '<i class="fa-solid fa-circle-check fa-xs" style="color: #00d13f;"></i>' : ''; ?></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-intUser-tab" data-bs-toggle="pill" data-bs-target="#pills-intUser" type="button" role="tab" aria-controls="pills-intUser" aria-selected="false"><i class="fa-regular fa-comments"></i> Interview User <?php echo isset($row_interview_user['hasil_iu']) && $row_interview_user['hasil_iu'] === 'lolos' ? '<i class="fa-solid fa-circle-check fa-xs" style="color: #00d13f;"></i>' : ''; ?></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-hasilAkhir-tab" data-bs-toggle="pill" data-bs-target="#pills-hasilAkhir" type="button" role="tab" aria-controls="pills-hasilAkhir" aria-selected="false"><i class="fa-solid fa-file"></i> Hasil Akhir <?php echo isset($row_hasil_akhir['hasil_akhir']) && $row_hasil_akhir['hasil_akhir'] === 'lolos' ? '<i class="fa-solid fa-circle-check fa-xs" style="color: #00d13f;"></i>' : ''; ?></button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-administrasi" role="tabpanel" aria-labelledby="pills-administrasi-tab">
                                        <!-- Form administrasi -->

                                        <form class="row g-3" id="form1">
                                            <input type="number" name="id_pelamar" value="<?php echo $_GET['id_pelamar']; ?>" hidden>
                                            <div class="col-md-4">
                                                <label for="tanggalseleksi" class="form-label">Tanggal Seleksi Administrasi</label>
                                                <input type="date" class="form-control" id="tanggalseleksi" name="tanggalseleksi" value="<?php echo $row_amd['tanggal_seleksi'] ?? ''; ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="nilaiCv" class="form-label">Penilaian CV</label>
                                                <select id="nilaiCv" class="form-select" name="nilaiCv">
                                                    <option value="2" <?php echo isset($row_amd['nilai_cv']) && $row_amd['nilai_cv'] == 2 ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_amd['nilai_cv']) && $row_amd['nilai_cv'] == 1 ? 'selected' : ''; ?>>Yes</option>
                                                    <option value="0" <?php echo isset($row_amd['nilai_cv']) && $row_amd['nilai_cv'] == 0 ? 'selected' : ''; ?>>No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="nilaiKualifikasi" class="form-label">Penilaian Kualifikasi</label>
                                                <select id="nilaiKualifikasi" class="form-select" name="nilaiKualifikasi">
                                                    <option value="2" <?php echo isset($row_amd['nilai_kualifikasi']) && $row_amd['nilai_kualifikasi'] == 2 ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_amd['nilai_kualifikasi']) && $row_amd['nilai_kualifikasi'] == 1 ? 'selected' : ''; ?>>Yes</option>
                                                    <option value="0" <?php echo isset($row_amd['nilai_kualifikasi']) && $row_amd['nilai_kualifikasi'] == 0 ? 'selected' : ''; ?>>No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="nilaiPengalaman" class="form-label">Penilaian Pengalaman</label>
                                                <select id="nilaiPengalaman" class="form-select" name="nilaiPengalaman">
                                                    <option value="2" <?php echo isset($row_amd['nilai_pengalaman']) && $row_amd['nilai_pengalaman'] == 2 ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_amd['nilai_pengalaman']) && $row_amd['nilai_pengalaman'] == 1 ? 'selected' : ''; ?>>Yes</option>
                                                    <option value="0" <?php echo isset($row_amd['nilai_pengalaman']) && $row_amd['nilai_pengalaman'] == 0 ? 'selected' : ''; ?>>No</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="keterangan" class="form-label">Keterangan</label>
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo isset($row_amd['keterangan_adm']) && $row_amd['keterangan_adm'] != null ? $row_amd['keterangan_adm'] : ''; ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="hasil" class="form-label">Hasil</label>
                                                <select id="hasil" class="form-select" name="hasil">
                                                    <option value="pilih" <?php echo isset($row_amd['hasil_seleksi_adm']) && $row_amd['hasil_seleksi_adm'] == 'pilih' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="lolos" <?php echo isset($row_amd['hasil_seleksi_adm']) && $row_amd['hasil_seleksi_adm'] == 'lolos' ? 'selected' : ''; ?>>Lolos</option>
                                                    <option value="tidak lolos" <?php echo isset($row_amd['hasil_seleksi_adm']) && $row_amd['hasil_seleksi_adm'] == 'tidak lolos' ? 'selected' : ''; ?>>Tidak Lolos</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="pills-wii" role="tabpanel" aria-labelledby="pills-wii-tab">
                                        <!-- Form WII -->
                                        <form class="row g-3" id="form2">
                                            <input type="number" name="id_pelamar" value="<?php echo $_GET['id_pelamar']; ?>" hidden>


                                            <div class="col-md-4">
                                                <label for="waktuInterview" class="form-label">Waktu Interview</label>
                                                <input type="datetime-local" class="form-control" id="waktuInterview" name="waktuInterview" value="<?php echo isset($row_wii['waktuInterview']) ? date('Y-m-d\TH:i', strtotime($row_wii['waktuInterview'])) : date('Y-m-d\TH:i'); ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="konfirmasiKehadiran" class="form-label">Konfirmasi Kehadiran</label>
                                                <select id="konfirmasiKehadiran" class="form-select" name="konfirmasiKehadiran">
                                                    <option value="pilih" <?php echo isset($row_wii['konfirmasiKehadiran_wii']) && $row_wii['konfirmasiKehadiran_wii'] === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="bersedia" <?php echo isset($row_wii['konfirmasiKehadiran_wii']) && $row_wii['konfirmasiKehadiran_wii'] === 'bersedia' ? 'selected' : ''; ?>>Bersedia</option>
                                                    <option value="tidak bersedia" <?php echo isset($row_wii['konfirmasiKehadiran_wii']) && $row_wii['konfirmasiKehadiran_wii'] === 'tidak bersedia' ? 'selected' : ''; ?>>Tidak Bersedia</option>
                                                    <option value="reschedule" <?php echo isset($row_wii['konfirmasiKehadiran_wii']) && $row_wii['konfirmasiKehadiran_wii'] === 'reschedule' ? 'selected' : ''; ?>>Reschedule</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="p" class="form-label">P</label>
                                                <select id="p" class="form-select" name="p">
                                                    <option value="2" <?php echo isset($row_wii['p']) && $row_wii['p'] === '2' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_wii['p']) && $row_wii['p'] === '1' ? 'selected' : ''; ?>>Yes</option>
                                                    <option value="0" <?php echo isset($row_wii['p']) && $row_wii['p'] === '0' ? 'selected' : ''; ?>>No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="a" class="form-label">A</label>
                                                <select id="a" class="form-select" name="a">
                                                    <option value="2" <?php echo isset($row_wii['a']) && $row_wii['a'] === '2' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_wii['a']) && $row_wii['a'] === '1' ? 'selected' : ''; ?>>Yes</option>
                                                    <option value="0" <?php echo isset($row_wii['a']) && $row_wii['a'] === '0' ? 'selected' : ''; ?>>No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="k" class="form-label">K</label>
                                                <select id="k" class="form-select" name="k">
                                                    <option value="2" <?php echo isset($row_wii['k']) && $row_wii['k'] === '2' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_wii['k']) && $row_wii['k'] === '1' ? 'selected' : ''; ?>>Yes</option>
                                                    <option value="0" <?php echo isset($row_wii['k']) && $row_wii['k'] === '0' ? 'selected' : ''; ?>>No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="r" class="form-label">R</label>
                                                <select id="r" class="form-select" name="r">
                                                    <option value="2" <?php echo isset($row_wii['r']) && $row_wii['r'] === '2' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_wii['r']) && $row_wii['r'] === '1' ? 'selected' : ''; ?>>Yes</option>
                                                    <option value="0" <?php echo isset($row_wii['r']) && $row_wii['r'] === '0' ? 'selected' : ''; ?>>No</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="pengumuman" class="form-label">Pengumuman</label>
                                                <select id="pengumuman" class="form-select" name="pengumuman">
                                                    <option value="pilih" <?php echo isset($row_wii['pengumuman_wii']) && $row_wii['pengumuman_wii'] === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="sudah" <?php echo isset($row_wii['pengumuman_wii']) && $row_wii['pengumuman_wii'] === 'sudah' ? 'selected' : ''; ?>>Sudah</option>
                                                    <option value="belum" <?php echo isset($row_wii['pengumuman_wii']) && $row_wii['pengumuman_wii'] === 'belum' ? 'selected' : ''; ?>>Belum</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="id_int" class="form-label">Interviewer</label>
                                                <select id="id_int" class="form-select" name="id_int">
                                                    <?php
                                                    // Your SQL query to fetch data from the 'interviewer' table
                                                    $sql = "SELECT id_int, nama_int FROM interviewer";
                                                    $result = $conn->query($sql);

                                                    // Check if there are results
                                                    if ($result->num_rows > 0) {
                                                        // Output data of each row
                                                        while ($row = $result->fetch_assoc()) {
                                                            $selected = '';

                                                            // Check if there is a pre-selected value available
                                                            if (isset($row_wii['interviewer_wii']) && $row['id_int'] == $row_wii['interviewer_wii']) {
                                                                $selected = 'selected';
                                                            }

                                                            // Generate the options for the select element
                                                            echo '<option value="' . $row['id_int'] . '" ' . $selected . '>' . $row['nama_int'] . '</option>';
                                                        }
                                                    } else {
                                                        echo '<option value="">No interviewers found</option>';
                                                    }
                                                    ?>
                                                </select>

                                            </div>
                                            <div class="col-md-4">
                                                <label for="rating" class="form-label">Hasil</label>
                                                <select id="rating" class="form-select" name="rating">
                                                    <option value="2" <?php echo isset($row_wii['rating_wii']) && $row_wii['rating_wii'] === '2' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_wii['rating_wii']) && $row_wii['rating_wii'] === '1' ? 'selected' : ''; ?>>Lolos</option>
                                                    <option value="0" <?php echo isset($row_wii['rating_wii']) && $row_wii['rating_wii'] === '0' ? 'selected' : ''; ?>>Tidak Lolos</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <?php
                                                $phone = '+62 882-9347-7565';
                                                $teks = "
Selamat Pagi,

Kami HRD PT Pustaka Insan Madani menginformasikan kepada sdra/sdri bahwa kami akan mengadakan *Walk In Interview* secara online.

Hari dan Tanggal : Selasa, 03 Oktober 2023
Tempat : Video Call by WhatsApp
Waktu : 14.30 WIB

Silakan stand by dari pukul (14.20), jadwal sewaktu-waktu bisa berubah.

Diharapkan:
1. Mempersiapkan melalui Aplikasi Video Call by WhatsApp dengan jaringan stabil
2. Mengenakan pakaian rapi
3. Menunggu dan tidak berpergian selama belum kami hubungi. Apabila pada saat kami hubungi tidak diangkat (kecuali kendala sinyal), urutan wawancara akan kami jadikan ke urutan terakhir

Harap Konfirmasi
Nama_Bersedia (paling lambat pukul 14.00 WIB)

*HRD*
*PT PUSTAKA INSAN MADANI*
"; ?>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <a class="btn btn-success text-white" href="https://api.whatsapp.com/send?phone=<?php echo $phone; ?>&text=
                                                <?php echo urlencode($teks); ?>" data-action="share/whatsapp/share">Invite</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <!-- Form Psikotest -->
                                        <form class="row g-3" id="form3">
                                            <input type="number" name="id_pelamar" value="<?php echo $_GET['id_pelamar']; ?>" hidden>

                                            <div class="col-md-4">
                                                <label for="tanggalPsikotest" class="form-label">Tanggal Psikotest</label>
                                                <input type="date" class="form-control" id="tanggalPsikotest" name="tanggalPsikotest" value="<?php echo isset($row_psikotest['tanggalPsikotest']) ? $row_psikotest['tanggalPsikotest'] : ''; ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="konfirmasiKehadiran" class="form-label">Konfirmasi Kehadiran</label>
                                                <select id="konfirmasiKehadiran" class="form-select" name="konfirmasiKehadiran">
                                                    <option value="pilih" <?php echo isset($row_psikotest['konfirmasiKehadiran']) && $row_psikotest['konfirmasiKehadiran'] === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="bersedia" <?php echo isset($row_psikotest['konfirmasiKehadiran']) && $row_psikotest['konfirmasiKehadiran'] === 'bersedia' ? 'selected' : ''; ?>>Bersedia</option>
                                                    <option value="tidak bersedia" <?php echo isset($row_psikotest['konfirmasiKehadiran']) && $row_psikotest['konfirmasiKehadiran'] === 'tidak bersedia' ? 'selected' : ''; ?>>Tidak Bersedia</option>
                                                    <option value="reschedule" <?php echo isset($row_psikotest['konfirmasiKehadiran']) && $row_psikotest['konfirmasiKehadiran'] === 'reschedule' ? 'selected' : ''; ?>>Reschedule</option>
                                                </select>
                                            </div>


                                            <div class="col-md-4">
                                                <label for="pengumuman" class="form-label">Pengumuman</label>
                                                <select id="pengumuman" class="form-select" name="pengumuman">
                                                    <option value="pilih" <?php echo isset($row_psikotest['pengumuman_psikotest']) && $row_psikotest['pengumuman_psikotest'] === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="sudah" <?php echo isset($row_psikotest['pengumuman_psikotest']) && $row_psikotest['pengumuman_psikotest'] === 'sudah' ? 'selected' : ''; ?>>Sudah</option>
                                                    <option value="belum" <?php echo isset($row_psikotest['pengumuman_psikotest']) && $row_psikotest['pengumuman_psikotest'] === 'belum' ? 'selected' : ''; ?>>Belum</option>
                                                </select>
                                            </div>

                                            <div class="col-md-8">
                                                <label for="keterangan" class="form-label">Keterangan</label>
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo isset($row_psikotest['keterangan']) ? $row_psikotest['keterangan'] : ''; ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="rating" class="form-label">Hasil</label>
                                                <select id="rating" class="form-select" name="rating">
                                                    <option value="pilih" <?php echo isset($row_psikotest['rating_psikotest']) && $row_psikotest['rating_psikotest'] === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="lolos" <?php echo isset($row_psikotest['rating_psikotest']) && $row_psikotest['rating_psikotest'] === 'lolos' ? 'selected' : ''; ?>>Lolos</option>
                                                    <option value="tidak lolos" <?php echo isset($row_psikotest['rating_psikotest']) && $row_psikotest['rating_psikotest'] === 'tidak lolos' ? 'selected' : ''; ?>>Tidak Lolos</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="pills-indepth" role="tabpanel" aria-labelledby="pills-indepth-tab">
                                        <!-- Form Indepth -->
                                        <form class="row g-3" id="form4">
                                            <input type="number" name="id_pelamar" value="<?php echo $_GET['id_pelamar']; ?>" hidden>
                                            <div class="col-md-4">
                                                <label for="tanggalIndepth" class="form-label">Tanggal Indepth</label>
                                                <input type="date" class="form-control" id="tanggalIndepth" name="tanggalIndepth" value="<?php echo isset($row_indepth['tanggalIndepth']) ? $row_indepth['tanggalIndepth'] : ''; ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="konfirmasiKehadiran" class="form-label">Konfirmasi Kehadiran</label>
                                                <select id="konfirmasiKehadiran" class="form-select" name="konfirmasiKehadiran">
                                                    <option value="pilih" <?php echo isset($row_indepth['konfirmasiKehadiran_in']) && $row_indepth['konfirmasiKehadiran_in'] === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="bersedia" <?php echo isset($row_indepth['konfirmasiKehadiran_in']) && $row_indepth['konfirmasiKehadiran_in'] === 'bersedia' ? 'selected' : ''; ?>>Bersedia</option>
                                                    <option value="tidak bersedia" <?php echo isset($row_indepth['konfirmasiKehadiran_in']) && $row_indepth['konfirmasiKehadiran_in'] === 'tidak bersedia' ? 'selected' : ''; ?>>Tidak Bersedia</option>
                                                    <option value="reschedule" <?php echo isset($row_indepth['konfirmasiKehadiran_in']) && $row_indepth['konfirmasiKehadiran_in'] === 'reschedule' ? 'selected' : ''; ?>>Reschedule</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="KTB" class="form-label">KTB</label>
                                                <select id="KTB" class="form-select" name="KTB">
                                                    <option value="2" <?php echo isset($row_indepth['KTB']) && $row_indepth['KTB'] === '2' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_indepth['KTB']) && $row_indepth['KTB'] === '1' ? 'selected' : ''; ?>>Yes</option>
                                                    <option value="0" <?php echo isset($row_indepth['KTB']) && $row_indepth['KTB'] === '0' ? 'selected' : ''; ?>>Tidak Lolos</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="KPR" class="form-label">KPR</label>
                                                <select id="KPR" class="form-select" name="KPR">
                                                    <option value="2" <?php echo isset($row_indepth['KPR']) && $row_indepth['KPR'] === '2' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_indepth['KPR']) && $row_indepth['KPR'] === '1' ? 'selected' : ''; ?>>Yes</option>
                                                    <option value="0" <?php echo isset($row_indepth['KPR']) && $row_indepth['KPR'] === '0' ? 'selected' : ''; ?>>Tidak Lolos</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="Siker" class="form-label">Siker</label>
                                                <select id="Siker" class="form-select" name="Siker">
                                                    <option value="2" <?php echo isset($row_indepth['Siker']) && $row_indepth['Siker'] === '2' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_indepth['Siker']) && $row_indepth['Siker'] === '1' ? 'selected' : ''; ?>>Yes</option>
                                                    <option value="0" <?php echo isset($row_indepth['Siker']) && $row_indepth['Siker'] === '0' ? 'selected' : ''; ?>>Tidak Lolos</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="interviewer" class="form-label">Interviewer Indepth</label>
                                                <select id="interviewer" class="form-select" name="interviewer">

                                                    <?php
                                                    // Your SQL query to fetch data from the 'interviewer' table
                                                    $sql = "SELECT id_int, nama_int FROM interviewer";
                                                    $result = $conn->query($sql);

                                                    // Check if there are results
                                                    if ($result->num_rows > 0) {
                                                        // Output data of each row
                                                        while ($row = $result->fetch_assoc()) {
                                                            $selected = '';

                                                            // Check if there is a pre-selected value available
                                                            if (isset($row_indepth['interviewerIndepth']) && $row['id_int'] == $row_indepth['interviewerIndepth']) {
                                                                $selected = 'selected';
                                                            }

                                                            // Generate the options for the select element
                                                            echo '<option value="' . $row['id_int'] . '" ' . $selected . '>' . $row['nama_int'] . '</option>';
                                                        }
                                                    } else {
                                                        echo '<option value="">No interviewers found</option>';
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="pengumuman" class="form-label">Pengumuman</label>
                                                <select id="pengumuman" class="form-select" name="pengumuman">
                                                    <option value="pilih" <?php echo isset($row_indepth['pengumuman_in']) && $row_indepth['pengumuman_in'] === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="sudah" <?php echo isset($row_indepth['pengumuman_in']) && $row_indepth['pengumuman_in'] === 'sudah' ? 'selected' : ''; ?>>Sudah</option>
                                                    <option value="belum" <?php echo isset($row_indepth['pengumuman_in']) && $row_indepth['pengumuman_in'] === 'belum' ? 'selected' : ''; ?>>Belum</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="keterangan" class="form-label">Keterangan</label>
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo isset($row_indepth['keterangan_in']) ? $row_indepth['keterangan_in'] : ''; ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="hasil" class="form-label">Hasil</label>
                                                <select id="hasil" class="form-select" name="hasil">
                                                    <option value="pilih" <?php echo isset($row_indepth['hasilIndepth']) && $row_indepth['hasilIndepth'] === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="lolos" <?php echo isset($row_indepth['hasilIndepth']) && $row_indepth['hasilIndepth'] === 'lolos' ? 'selected' : ''; ?>>Lolos</option>
                                                    <option value="tidak lolos" <?php echo isset($row_indepth['hasilIndepth']) && $row_indepth['hasilIndepth'] === 'tidak lolos' ? 'selected' : ''; ?>>Tidak Lolos</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="pills-tesBidang" role="tabpanel" aria-labelledby="pills-tesBidang-tab">
                                        <!-- Form tes bidang -->
                                        <form class="row g-3" id="form5">
                                            <input type="number" name="id_pelamar" value="<?php echo $_GET['id_pelamar']; ?>" hidden>
                                            <div class="col-md-4">
                                                <label for="tanggalTesBidang" class="form-label">Tanggal Tes Bidang</label>
                                                <input type="date" class="form-control" id="tanggalTesBidang" name="tanggalTesBidang" value="<?php echo isset($row_tes_bidang['tanggalTesBidang']) ? $row_tes_bidang['tanggalTesBidang'] : ''; ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="nilaiTesBidang1" class="form-label">Nilai Tes Bidang 1</label>
                                                <input type="number" class="form-control" id="nilaiTesBidang1" name="nilaiTesBidang1" value="<?php echo isset($row_tes_bidang['nilaiTesBidang1']) ? $row_tes_bidang['nilaiTesBidang1'] : ''; ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="korektor1" class="form-label">Korektor 1</label>
                                                <select id="korektor1" class="form-select" name="korektor1">
                                                    <?php
                                                    // Your SQL query to fetch data from the 'interviewer' table
                                                    $sql = "SELECT id_int, nama_int FROM interviewer";
                                                    $result = $conn->query($sql);

                                                    // Check if there are results
                                                    if ($result->num_rows > 0) {
                                                        // Output data of each row
                                                        while ($row = $result->fetch_assoc()) {
                                                            $selected = '';

                                                            // Check if there is a pre-selected value available
                                                            if (isset($row_tes_bidang['korektor1']) && $row['id_int'] == $row_tes_bidang['korektor1']) {
                                                                $selected = 'selected';
                                                            }

                                                            // Generate the options for the select element
                                                            echo '<option value="' . $row['id_int'] . '" ' . $selected . '>' . $row['nama_int'] . '</option>';
                                                        }
                                                    } else {
                                                        echo '<option value="">No interviewers found</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="nilaiTesBidang2" class="form-label">Nilai Tes Bidang 2</label>
                                                <input type="number" class="form-control" id="nilaiTesBidang2" name="nilaiTesBidang2" value="<?php echo isset($row_tes_bidang['nilaiTesBidang2']) ? $row_tes_bidang['nilaiTesBidang2'] : ''; ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="korektor2" class="form-label">Korektor 2</label>
                                                <select id="korektor2" class="form-select" name="korektor2">
                                                    <?php
                                                    // Your SQL query to fetch data from the 'interviewer' table
                                                    $sql = "SELECT id_int, nama_int FROM interviewer";
                                                    $result = $conn->query($sql);

                                                    // Check if there are results
                                                    if ($result->num_rows > 0) {
                                                        // Output data of each row
                                                        while ($row = $result->fetch_assoc()) {
                                                            $selected = '';

                                                            // Check if there is a pre-selected value available
                                                            if (isset($row_tes_bidang['korektor2']) && $row['id_int'] == $row_tes_bidang['korektor2']) {
                                                                $selected = 'selected';
                                                            }

                                                            // Generate the options for the select element
                                                            echo '<option value="' . $row['id_int'] . '" ' . $selected . '>' . $row['nama_int'] . '</option>';
                                                        }
                                                    } else {
                                                        echo '<option value="">No interviewers found</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="pengumuman" class="form-label">Pengumuman</label>
                                                <select id="pengumuman" class="form-select" name="pengumuman">
                                                    <option value="pilih" <?php echo isset($row_tes_bidang['pengumuman_tb']) && $row_tes_bidang['pengumuman_tb'] === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="sudah" <?php echo isset($row_tes_bidang['pengumuman_tb']) && $row_tes_bidang['pengumuman_tb'] === 'sudah' ? 'selected' : ''; ?>>Sudah</option>
                                                    <option value="belum" <?php echo isset($row_tes_bidang['pengumuman_tb']) && $row_tes_bidang['pengumuman_tb'] === 'belum' ? 'selected' : ''; ?>>Belum</option>
                                                </select>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="keterangan" class="form-label">Keterangan</label>
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo isset($row_tes_bidang['keterangan_tb']) ? $row_tes_bidang['keterangan_tb'] : ''; ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="hasil" class="form-label">Hasil</label>
                                                <select id="hasil" class="form-select" name="hasil">
                                                    <option value="pilih" <?php echo isset($row_tes_bidang['hasil_tb']) && $row_tes_bidang['hasil_tb'] === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="lolos" <?php echo isset($row_tes_bidang['hasil_tb']) && $row_tes_bidang['hasil_tb'] === 'lolos' ? 'selected' : ''; ?>>Lolos</option>
                                                    <option value="tidak lolos" <?php echo isset($row_tes_bidang['hasil_tb']) && $row_tes_bidang['hasil_tb'] === 'tidak lolos' ? 'selected' : ''; ?>>Tidak Lolos</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="pills-intUser" role="tabpanel" aria-labelledby="pills-intUser-tab">
                                        <!-- Form interview user -->
                                        <form class="row g-3" id="form6">
                                            <input type="number" name="id_pelamar" value="<?php echo $_GET['id_pelamar']; ?>" hidden>
                                            <div class="col-md-4">
                                                <label for="tanggalIntUser" class="form-label">Tanggal Interview User</label>
                                                <input type="date" class="form-control" id="tanggalIntUser" name="tanggalIntUser" value="<?php echo $row_interview_user['tanggalInterviewUser'] ?? ''; ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="konfirmasiKehadiran" class="form-label">Konfirmasi Kehadiran</label>
                                                <select id="konfirmasiKehadiran" class="form-select" name="konfirmasiKehadiran">
                                                    <option value="pilih" <?php echo ($row_interview_user['konfirmasiKehadiran_iu'] ?? 'pilih') === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="bersedia" <?php echo ($row_interview_user['konfirmasiKehadiran_iu'] ?? '') === 'bersedia' ? 'selected' : ''; ?>>Bersedia</option>
                                                    <option value="tidak bersedia" <?php echo ($row_interview_user['konfirmasiKehadiran_iu'] ?? '') === 'tidak bersedia' ? 'selected' : ''; ?>>Tidak Bersedia</option>
                                                    <option value="reschedule" <?php echo ($row_interview_user['konfirmasiKehadiran_iu'] ?? '') === 'reschedule' ? 'selected' : ''; ?>>Reschedule</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="dt" class="form-label">DT</label>
                                                <select id="dt" class="form-select" name="dt">
                                                    <option value="2" <?php echo isset($row_interview_user['dt']) && $row_interview_user['dt'] === '2' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_interview_user['dt']) && $row_interview_user['dt'] === '1' ? 'selected' : ''; ?>>Yes</option>
                                                    <option value="0" <?php echo isset($row_interview_user['dt']) && $row_interview_user['dt'] === '0' ? 'selected' : ''; ?>>Tidak Lolos</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="ka" class="form-label">KA</label>
                                                <select id="ka" class="form-select" name="ka">
                                                    <option value="2" <?php echo isset($row_interview_user['ka']) && $row_interview_user['ka'] === '2' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_interview_user['ka']) && $row_interview_user['ka'] === '1' ? 'selected' : ''; ?>>Yes</option>
                                                    <option value="0" <?php echo isset($row_interview_user['ka']) && $row_interview_user['ka'] === '0' ? 'selected' : ''; ?>>Tidak Lolos</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="pm" class="form-label">PM</label>
                                                <select id="pm" class="form-select" name="pm">
                                                    <option value="2" <?php echo isset($row_interview_user['pm']) && $row_interview_user['pm'] === '2' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_interview_user['pm']) && $row_interview_user['pm'] === '1' ? 'selected' : ''; ?>>Yes</option>
                                                    <option value="0" <?php echo isset($row_interview_user['pm']) && $row_interview_user['pm'] === '0' ? 'selected' : ''; ?>>Tidak Lolos</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="pd" class="form-label">PD</label>
                                                <select id="pd" class="form-select" name="pd">
                                                    <option value="2" <?php echo isset($row_interview_user['pd']) && $row_interview_user['pd'] === '2' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_interview_user['pd']) && $row_interview_user['pd'] === '1' ? 'selected' : ''; ?>>Yes</option>
                                                    <option value="0" <?php echo isset($row_interview_user['pd']) && $row_interview_user['pd'] === '0' ? 'selected' : ''; ?>>Tidak Lolos</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="bd" class="form-label">BD</label>
                                                <select id="bd" class="form-select" name="bd">
                                                    <option value="2" <?php echo isset($row_interview_user['bd']) && $row_interview_user['bd'] === '2' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_interview_user['bd']) && $row_interview_user['bd'] === '1' ? 'selected' : ''; ?>>Yes</option>
                                                    <option value="0" <?php echo isset($row_interview_user['bd']) && $row_interview_user['bd'] === '0' ? 'selected' : ''; ?>>Tidak Lolos</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="ktb" class="form-label">KTB2</label>
                                                <select id="ktb" class="form-select" name="ktb">
                                                    <option value="2" <?php echo isset($row_interview_user['ktb']) && $row_interview_user['ktb'] === '2' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="1" <?php echo isset($row_interview_user['ktb']) && $row_interview_user['ktb'] === '1' ? 'selected' : ''; ?>>Yes</option>
                                                    <option value="0" <?php echo isset($row_interview_user['ktb']) && $row_interview_user['ktb'] === '0' ? 'selected' : ''; ?>>Tidak Lolos</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="id_int" class="form-label">Interviewer</label>
                                                <select id="id_int" class="form-select" name="id_int">
                                                    <?php
                                                    // Your SQL query to fetch data from the 'interviewer' table
                                                    $sql = "SELECT id_int, nama_int FROM interviewer";
                                                    $result = $conn->query($sql);

                                                    // Check if there are results
                                                    if ($result->num_rows > 0) {
                                                        // Output data of each row
                                                        while ($row = $result->fetch_assoc()) {
                                                            $selected = '';

                                                            // Check if there is a pre-selected value available
                                                            if (isset($row_interview_user['interviewer_iu']) && $row['id_int'] == $row_interview_user['interviewer_iu']) {
                                                                $selected = 'selected';
                                                            }

                                                            // Generate the options for the select element
                                                            echo '<option value="' . $row['id_int'] . '" ' . $selected . '>' . $row['nama_int'] . '</option>';
                                                        }
                                                    } else {
                                                        echo '<option value="">No interviewers found</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="pengumuman" class="form-label">Pengumuman</label>
                                                <select id="pengumuman" class="form-select" name="pengumuman">
                                                    <option value="pilih" <?php echo isset($row_interview_user['pengumuman_iu']) && ($row_interview_user['pengumuman_iu'] ?? 'pilih') === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="sudah" <?php echo isset($row_interview_user['pengumuman_iu']) && ($row_interview_user['pengumuman_iu'] ?? '') === 'sudah' ? 'selected' : ''; ?>>Sudah</option>
                                                    <option value="belum" <?php echo isset($row_interview_user['pengumuman_iu']) && ($row_interview_user['pengumuman_iu'] ?? '') === 'belum' ? 'selected' : ''; ?>>Belum</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="keterangan" class="form-label">Keterangan</label>
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo isset($row_interview_user['keterangan_iu']) && $row_interview_user['keterangan_iu'] ?? ''; ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="hasil" class="form-label">Hasil</label>
                                                <select id="hasil" class="form-select" name="hasil">
                                                    <option value="pilih" <?php echo isset($row_interview_user['hasil_iu']) && ($row_interview_user['hasil_iu'] ?? 'pilih') === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="lolos" <?php echo isset($row_interview_user['hasil_iu']) && ($row_interview_user['hasil_iu'] ?? '') === 'lolos' ? 'selected' : ''; ?>>Lolos</option>
                                                    <option value="tidak lolos" <?php echo isset($row_interview_user['hasil_iu']) && ($row_interview_user['hasil_iu'] ?? '') === 'tidak lolos' ? 'selected' : ''; ?>>Tidak Lolos</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>


                                    <div class="tab-pane fade" id="pills-hasilAkhir" role="tabpanel" aria-labelledby="pills-hasilAkhir-tab">
                                        <!-- Form hasil akhir -->
                                        <form class="row g-3" id="form7">
                                            <input type="number" name="id_pelamar" value="<?php echo $_GET['id_pelamar']; ?>" hidden>

                                            <div class="col-md-6">
                                                <label for="spkwt" class="form-label">SPKWT</label>
                                                <input type="text" class="form-control" id="spkwt" name="spkwt" value="<?php echo isset($row_hasil_akhir['spkwt']) ? $row_hasil_akhir['spkwt'] : ''; ?>">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="tanggalOnboard" class="form-label">Tanggal Onboarding</label>
                                                <input type="date" class="form-control" id="tanggalOnboard" name="onboard" value="<?php echo isset($row_hasil_akhir['onboard']) ? $row_hasil_akhir['onboard'] : ''; ?>">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="keterangan" class="form-label">Keterangan</label>
                                                <input type="text" class="form-control" id="keterangan" name="keterangan_akhir" value="<?php echo isset($row_hasil_akhir['keterangan_akhir']) ? $row_hasil_akhir['keterangan_akhir'] : ''; ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="hasil" class="form-label">Hasil Akhir</label>
                                                <select id="hasil" class="form-select" name="hasil_akhir">
                                                    <option value="pilih" <?php echo isset($row_hasil_akhir['hasil_akhir']) && $row_hasil_akhir['hasil_akhir'] == 'pilih' ? 'selected' : ''; ?>>Choose...</option>
                                                    <option value="lolos" <?php echo isset($row_hasil_akhir['hasil_akhir']) && $row_hasil_akhir['hasil_akhir'] == 'lolos' ? 'selected' : ''; ?>>Lolos</option>
                                                    <option value="tidak lolos" <?php echo isset($row_hasil_akhir['hasil_akhir']) && $row_hasil_akhir['hasil_akhir'] == 'tidak lolos' ? 'selected' : ''; ?>>Tidak Lolos</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="alasan_tidak_lolos" class="form-label">alasan_tidak_lolos</label>
                                                <input type="text" class="form-control" id="alasan_tidak_lolos" name="alasan_tidak_lolos" value="<?php echo isset($row_hasil_akhir['alasan_tidak_lolos']) ? $row_hasil_akhir['alasan_tidak_lolos'] : ''; ?>">
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
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

    <!-- Include DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            // Form 1 submission
            $("#form1").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "../controller/seleksi_administrasi.php", // Replace with the path to your PHP script
                    data: formData,
                    success: function(response) {
                        alert(response); // Display the response from the server
                        // You can redirect or perform other actions as needed.
                    },
                    error: function() {
                        alert("Error while submitting Form 1");
                    }
                });
            });

            // Form 2 submission
            $("#form2").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "../controller/seleksi_wii.php", // Path to your PHP script
                    data: formData,
                    success: function(response) {
                        alert(response); // Display the response from the server
                        // You can redirect or perform other actions as needed.
                    },
                    error: function() {
                        alert("Error while submitting Form 2");
                    }
                });
            });

            // Form 3 submission
            $("#form3").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "../controller/seleksi_psikotest.php", // Path to your PHP script
                    data: formData,
                    success: function(response) {
                        alert(response); // Display the response from the server
                        // You can redirect or perform other actions as needed.
                    },
                    error: function() {
                        alert("Error while submitting Form 3");
                    }
                });
            });

            // form 4
            $("#form4").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "../controller/seleksi_indepth.php", // Path to your PHP script
                    data: formData,
                    success: function(response) {
                        alert(response); // Display the response from the server
                        // You can redirect or perform other actions as needed.
                    },
                    error: function() {
                        alert("Error while submitting Form 4");
                    }
                });

            });

            // Form 5 submission
            $("#form5").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "../controller/seleksi_tesbidang.php",
                    data: formData,
                    success: function(response) {
                        alert(response); // Display the response from the server
                        // You can redirect or perform other actions as needed.
                    },
                    error: function() {
                        alert("Error while submitting Form 5");
                    }
                });
            });

            // Form 6 submission
            $("#form6").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "../controller/seleksi_interviewuser.php",
                    data: formData,
                    success: function(response) {
                        alert(response); // Display the response from the server
                        // You can redirect or perform other actions as needed.
                    },
                    error: function() {
                        alert("Error while submitting Form 6");
                    }
                });
            });

            // Form 6 submission
            $("#form7").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "../controller/pelamar_lolos.php",
                    data: formData,
                    success: function(response) {
                        alert(response); // Display the response from the server
                        // You can redirect or perform other actions as needed.
                    },
                    error: function() {
                        alert("Error while submitting Form 7");
                    }
                });
            });
        });
    </script>


</body>

</html>