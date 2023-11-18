<!-- Form hasil akhir -->
<form class="row g-3" id="form7">
    <input type="number" name="id_pelamar" value="<?php echo $_GET['id_pelamar']; ?>" hidden>

    <div class="col-md-6">
        <label for="spkwt" class="form-label">SPKWT</label>
        <input type="text" class="form-control" id="spkwt" name="spkwt"
            value="<?php echo isset($row_hasil_akhir['spkwt']) ? $row_hasil_akhir['spkwt'] : ''; ?>">
    </div>

    <div class="col-md-6">
        <label for="tanggalOnboard" class="form-label">Tanggal Onboarding</label>
        <input type="date" class="form-control" id="tanggalOnboard" name="onboard"
            value="<?php echo isset($row_hasil_akhir['onboard']) ? $row_hasil_akhir['onboard'] : ''; ?>">
    </div>

    <div class="col-md-6">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan_akhir"
            value="<?php echo isset($row_hasil_akhir['keterangan_akhir']) ? $row_hasil_akhir['keterangan_akhir'] : ''; ?>">
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
        <input type="text" class="form-control" id="alasan_tidak_lolos" name="alasan_tidak_lolos"
            value="<?php echo isset($row_hasil_akhir['alasan_tidak_lolos']) ? $row_hasil_akhir['alasan_tidak_lolos'] : ''; ?>">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>