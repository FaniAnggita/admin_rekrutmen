<!-- Form Psikotest -->
<form class="row g-3" id="form3">
    <input type="number" name="id_pelamar" value="<?php echo $_GET['id_pelamar']; ?>" hidden>

    <div class="col-md-4">
        <label for="tanggalPsikotest" class="form-label">Tanggal Psikotest</label>
        <input type="date" class="form-control" id="tanggalPsikotest" name="tanggalPsikotest"
            value="<?php echo isset($row_psikotest['tanggalPsikotest']) ? $row_psikotest['tanggalPsikotest'] : ''; ?>">
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
        <input type="text" class="form-control" id="keterangan" name="keterangan"
            value="<?php echo isset($row_psikotest['keterangan']) ? $row_psikotest['keterangan'] : ''; ?>">
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