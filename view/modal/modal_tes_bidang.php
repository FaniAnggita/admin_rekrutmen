<form class="row g-3" id="form5">
    <input type="number" name="id_pelamar" value="<?php echo $_GET['id_pelamar']; ?>" hidden>
    <div class="col-md-4">
        <label for="tanggalTesBidang" class="form-label">Tanggal Tes Bidang</label>
        <input type="date" class="form-control" id="tanggalTesBidang" name="tanggalTesBidang"
            value="<?php echo isset($row_tes_bidang['tanggalTesBidang']) ? $row_tes_bidang['tanggalTesBidang'] : ''; ?>">
    </div>
    <div class="col-md-4">
        <label for="nilaiTesBidang1" class="form-label">Nilai Tes Bidang 1</label>
        <input type="number" class="form-control" id="nilaiTesBidang1" name="nilaiTesBidang1"
            value="<?php echo isset($row_tes_bidang['nilaiTesBidang1']) ? $row_tes_bidang['nilaiTesBidang1'] : ''; ?>">
    </div>

    <div class="col-md-4">
        <label for="nilaiTesBidang2" class="form-label">Nilai Tes Bidang 2</label>
        <input type="number" class="form-control" id="nilaiTesBidang2" name="nilaiTesBidang2"
            value="<?php echo isset($row_tes_bidang['nilaiTesBidang2']) ? $row_tes_bidang['nilaiTesBidang2'] : ''; ?>">
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
        <input type="text" class="form-control" id="keterangan" name="keterangan"
            value="<?php echo isset($row_tes_bidang['keterangan_tb']) ? $row_tes_bidang['keterangan_tb'] : ''; ?>">
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