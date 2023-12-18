<?php
require_once('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Form Input Data</title>
</head>

<body>
    <div class="container">
        <h2>Form Lamaran Kerja</h2>

        <form action="proses_form.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>

            <div class="form-group">
                <?php
                $pilih_posisi = $_GET['pilih_posisi'];
                $sql = "SELECT kode_ps, nama_ps FROM posisi WHERE kode_ps = '$pilih_posisi'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) { ?>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <input type="text" class="form-control" id="posisi" name="posisi" value="<?php echo $row['kode_ps']; ?>"
                            hidden>
                    <?php }
                } else {
                    echo "0 results";
                }
                ?>

            </div>
            <div class="form-group">
                <label for="nama_lengkap">Posisi</label>
                <?php
                $pilih_posisi = $_GET['pilih_posisi'];
                $sql = "SELECT kode_ps, nama_ps FROM posisi WHERE kode_ps = '$pilih_posisi' LIMIT 1";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) { ?>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <input type="text" class="form-control" value="<?php echo $row['nama_ps']; ?>" disabled>
                    <?php }
                } else {
                    echo "0 results";
                }
                ?>

            </div>
            <!-- Nama Lengkap -->
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                <div class="invalid-feedback">
                    Silakan isi Nama Lengkap.
                </div>
            </div>

            <!-- Tanggal Lahir -->
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                <div class="invalid-feedback">
                    Silakan pilih Tanggal Lahir.
                </div>
            </div>

            <!-- Jenis Kelamin -->
            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="gender_laki" name="gender" value="Laki-Laki"
                        required>
                    <label class="form-check-label" for="gender_laki">Laki-Laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="gender_perempuan" name="gender" value="Perempuan"
                        required>
                    <label class="form-check-label" for="gender_perempuan">Perempuan</label>
                </div>
                <div class="invalid-feedback">
                    Silakan pilih Jenis Kelamin.
                </div>
            </div>

            <!-- Domisili -->
            <div class="form-group">
                <label for="domisili">Domisili:</label>
                <input type="text" class="form-control" id="domisili" name="domisili" required>
                <div class="invalid-feedback">
                    Silakan isi Domisili.
                </div>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">
                    Silakan isi Email dengan format yang benar.
                </div>
            </div>

            <!-- Informasi Lowongan -->
            <div class="form-group">
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
                    <option value="Website Pustaka PT Pustaka Insan Madani">Website Pustaka PT Pustaka Insan Madani
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
            <div class="form-group">
                <label for="no_hp">Nomor HP:</label>
                <input type="tel" class="form-control" id="no_hp" name="no_hp" required>
                <div class="invalid-feedback">
                    Silakan isi Nomor HP.
                </div>
            </div>

            <!-- Jenjang Pendidikan -->
            <div class="form-group">
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
            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                <div class="invalid-feedback">
                    Silakan isi Jurusan.
                </div>
            </div>

            <!-- Sekolah/Universitas -->
            <div class="form-group">
                <label for="sekolah">Sekolah/Universitas:</label>
                <input type="text" class="form-control" id="sekolah" name="sekolah" required>
                <div class="invalid-feedback">
                    Silakan isi Nama Sekolah/Universitas.
                </div>
            </div>

            <!-- Unggah Dokumen (PDF) -->
            <div class="form-group">
                <label for="dokumen">Unggah Dokumen (PDF):</label>
                <input type="file" class="form-control-file" id="dokumen" name="dokumen" accept=".pdf" required>
                <div class="invalid-feedback">
                    Silakan unggah dokumen dalam format PDF.
                </div>
            </div>

            <button type="button" id="showConfirmationModal" class="btn btn-primary">Submit</button>

        </form>
    </div>
    <!-- Modal Konfirmasi -->
    <!-- Modal Konfirmasi -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah yakin data yang Anda masukkan sudah benar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="submitData">Ya, Kirim Data</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan script Bootstrap JavaScript dan script Anda -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

            // Tambahkan event listener untuk tombol "Submit"
            document.getElementById('showConfirmationModal').addEventListener('click', function () {
                // Validasi form sebelum menampilkan modal
                var form = document.querySelector('.needs-validation');
                if (form.checkValidity() === false) {
                    form.classList.add('was-validated');
                } else {
                    $('#confirmationModal').modal('show'); // Menampilkan modal konfirmasi
                }
            });

            // Tambahkan event listener untuk tombol "Ya, Kirim Data"
            document.getElementById('submitData').addEventListener('click', function () {
                // Kirim data ke server jika dikonfirmasi
                var form = document.querySelector('.needs-validation');
                if (form.checkValidity() === true) {
                    // Simpan kode PHP untuk mengirim data ke server di sini
                    // Anda juga perlu mengganti "proses_form.php" dengan skrip PHP yang sesuai
                    form.submit();
                }
            });
        })();
    </script>

</body>

</html>