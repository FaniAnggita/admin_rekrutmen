<!-- Form interview user -->
<form class="row g-3" id="form1" action="../controller/seleksi_interviewuser.php" method="post">
    <div class="col-md-4">
        <label for="selectedIdsInputInterviewUser" class="form-label">ID Terpilih</label>
        <input type="text" class="form-control" id="selectedIdsInputInterviewUser" name="selectedIdsInputInterviewUser"
            readonly>
    </div>
    <div class="col-md-4">
        <label for="tanggalIntUser" class="form-label">Tanggal Interview User</label>
        <input type="date" class="form-control" id="tanggalIntUser" name="tanggalIntUser">
    </div>
    <div class="col-md-4">
        <label for="jam_iu" class="form-label">Jam IU</label>
        <input type="time" class="form-control" id="jam_iu" name="jam_iu">
    </div>
    <div class="col-md-4">
        <label for="konfirmasiKehadiran" class="form-label">Konfirmasi Kehadiran</label>
        <select id="konfirmasiKehadiran" class="form-select" name="konfirmasiKehadiran">
            <option value="">Choose...</option>
            <option value="bersedia">Bersedia</option>
            <option value="tidak bersedia">Tidak Bersedia</option>
            <option value="reschedule">Reschedule</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="dt" class="form-label">DT</label>
        <select id="dt" class="form-select" name="dt">
            <option value="">Choose...</option>
            <option value="1">Yes</option>
            <option value="0">Tidak Lolos</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="ka" class="form-label">KA</label>
        <select id="ka" class="form-select" name="ka">
            <option value="">Choose...</option>
            <option value="1">Yes</option>
            <option value="0">Tidak Lolos</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="pm" class="form-label">PM</label>
        <select id="pm" class="form-select" name="pm">
            <option value="">Choose...</option>
            <option value="1">Yes</option>
            <option value="0">Tidak Lolos</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="pd" class="form-label">PD</label>
        <select id="pd" class="form-select" name="pd">
            <option value="">Choose...</option>
            <option value="1">Yes</option>
            <option value="0">Tidak Lolos</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="bd" class="form-label">BD</label>
        <select id="bd" class="form-select" name="bd">
            <option value="">Choose...</option>
            <option value="1">Yes</option>
            <option value="0">Tidak Lolos</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="ktb" class="form-label">KTB2</label>
        <select id="ktb" class="form-select" name="ktb">
            <option value="">Choose...</option>
            <option value="1">Yes</option>
            <option value="0">Tidak Lolos</option>
        </select>
    </div>

    <div class="col-md-4">
        <?php
        // Fetch distinct values for the "Interviewer" field
        $sql = "SELECT nama_int FROM interviewer";
        $result = $conn->query($sql);

        // Store distinct values in an array
        $interviewerOptions = [];
        while ($row = $result->fetch_assoc()) {
            $interviewerOptions[] = $row['nama_int'];
        }
        ?>
        <label for="interviewers" class="form-label">Interviewer</label>
        <select id="interviewers" class="form-select" name="interviewers[]" multiple>
            <option value="">Choose...</option>
            <?php foreach ($interviewerOptions as $option): ?>
                <option value="<?php echo $option; ?>">
                    <?php echo $option; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>


    <div class="col-md-4">
        <label for="pengumuman" class="form-label">Pengumuman</label>
        <select id="pengumuman" class="form-select" name="pengumuman">
            <option value="">Choose...</option>
            <option value="sudah">Sudah</option>
            <option value="belum">Belum</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan">
    </div>
    <div class="col-md-4">
        <label for="hasil" class="form-label">Hasil</label>
        <select id="hasil" class="form-select" name="hasil">
            <option value="">Choose...</option>
            <option value="lolos">Lolos</option>
            <option value="tidak lolos">Tidak Lolos</option>
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>