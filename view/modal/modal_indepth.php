<!-- Form Indepth -->
<form class="row g-3" id="form4">
    <input type="number" name="id_pelamar" value="<?php echo $_GET['id_pelamar']; ?>" hidden>
    <div class="col-md-4">
        <label for="tanggalIndepth" class="form-label">Tanggal Indepth</label>
        <input type="date" class="form-control" id="tanggalIndepth" name="tanggalIndepth"
            value="<?php echo isset($row_indepth['tanggalIndepth']) ? $row_indepth['tanggalIndepth'] : ''; ?>">
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
            <option value="2" <?php echo isset($row_indepth['KTB']) && $row_indepth['KTB'] === '2' ? 'selected' : ''; ?>>
                Choose...</option>
            <option value="1" <?php echo isset($row_indepth['KTB']) && $row_indepth['KTB'] === '1' ? 'selected' : ''; ?>>
                Yes</option>
            <option value="0" <?php echo isset($row_indepth['KTB']) && $row_indepth['KTB'] === '0' ? 'selected' : ''; ?>>
                Tidak Lolos</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="KPR" class="form-label">KPR</label>
        <select id="KPR" class="form-select" name="KPR">
            <option value="2" <?php echo isset($row_indepth['KPR']) && $row_indepth['KPR'] === '2' ? 'selected' : ''; ?>>
                Choose...</option>
            <option value="1" <?php echo isset($row_indepth['KPR']) && $row_indepth['KPR'] === '1' ? 'selected' : ''; ?>>
                Yes</option>
            <option value="0" <?php echo isset($row_indepth['KPR']) && $row_indepth['KPR'] === '0' ? 'selected' : ''; ?>>
                Tidak Lolos</option>
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
        <label for="pengumuman" class="form-label">Pengumuman</label>
        <select id="pengumuman" class="form-select" name="pengumuman">
            <option value="pilih" <?php echo isset($row_indepth['pengumuman_in']) && $row_indepth['pengumuman_in'] === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
            <option value="sudah" <?php echo isset($row_indepth['pengumuman_in']) && $row_indepth['pengumuman_in'] === 'sudah' ? 'selected' : ''; ?>>Sudah</option>
            <option value="belum" <?php echo isset($row_indepth['pengumuman_in']) && $row_indepth['pengumuman_in'] === 'belum' ? 'selected' : ''; ?>>Belum</option>
        </select>
    </div>

    <div class="col-md-4">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan"
            value="<?php echo isset($row_indepth['keterangan_in']) ? $row_indepth['keterangan_in'] : ''; ?>">
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