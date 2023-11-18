<!-- Form interview user -->
<form class="row g-3" id="form6">
    <input type="number" name="id_pelamar" value="<?php echo $_GET['id_pelamar']; ?>" hidden>
    <div class="col-md-4">
        <label for="tanggalIntUser" class="form-label">Tanggal Interview User</label>
        <input type="date" class="form-control" id="tanggalIntUser" name="tanggalIntUser"
            value="<?php echo $row_interview_user['tanggalInterviewUser'] ?? ''; ?>">
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
        <label for="pengumuman" class="form-label">Pengumuman</label>
        <select id="pengumuman" class="form-select" name="pengumuman">
            <option value="pilih" <?php echo isset($row_interview_user['pengumuman_iu']) && ($row_interview_user['pengumuman_iu'] ?? 'pilih') === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
            <option value="sudah" <?php echo isset($row_interview_user['pengumuman_iu']) && ($row_interview_user['pengumuman_iu'] ?? '') === 'sudah' ? 'selected' : ''; ?>>Sudah</option>
            <option value="belum" <?php echo isset($row_interview_user['pengumuman_iu']) && ($row_interview_user['pengumuman_iu'] ?? '') === 'belum' ? 'selected' : ''; ?>>Belum</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan"
            value="<?php echo isset($row_interview_user['keterangan_iu']) && $row_interview_user['keterangan_iu'] ?? ''; ?>">
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