<?php var_dump($_GET); ?>
<form class="row g-3" id="form1" action="../controller/seleksi_administrasi.php" method="post">

    <input type="number" name="id_pelamar" value="<?php echo $_GET['id_pelamar']; ?>" hidden>
    <div class="col-md-4">
        <label for="selectedIdsInput" class="form-label">ID Terpilih</label>
        <input type="text" class="form-control" id="selectedIdsInput" name="selectedIdsInput" readonly>
    </div>
    <div class=" col-md-4">
        <label for="tanggalseleksi" class="form-label">Tanggal Seleksi Administrasi</label>
        <input type="date" class="form-control" id="tanggalseleksi" name="tanggalseleksi"
            value="<?php echo $row_amd['tanggal_seleksi'] ?? ''; ?>">
    </div>
    <div class="col-md-4">
        <label for="nilaiCv" class="form-label">Penilaian CV</label>
        <select id="nilaiCv" class="form-select" name="nilaiCv">
            <option value="2" <?php echo isset($row_amd['nilai_cv']) && $row_amd['nilai_cv'] == 2 ? 'selected' : ''; ?>>
                Choose...</option>
            <option value="1" <?php echo isset($row_amd['nilai_cv']) && $row_amd['nilai_cv'] == 1 ? 'selected' : ''; ?>>
                Yes</option>
            <option value="0" <?php echo isset($row_amd['nilai_cv']) && $row_amd['nilai_cv'] == 0 ? 'selected' : ''; ?>>No
            </option>
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
        <input type="text" class="form-control" id="keterangan" name="keterangan"
            value="<?php echo isset($row_amd['keterangan_adm']) && $row_amd['keterangan_adm'] != null ? $row_amd['keterangan_adm'] : ''; ?>">
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