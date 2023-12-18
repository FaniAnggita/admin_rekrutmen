<form class="row g-3" id="form1" action="../controller/seleksi_tesbidang.php" method="post">
    <div class="col-md-3">
        <label for="selectedIdsInputTesBidang" class="form-label">ID Terpilih</label>
        <input type="text" class="form-control" id="selectedIdsInputTesBidang" name="selectedIdsInputTesBidang"
            readonly>
    </div>
    <div class="col-md-3">
        <label for="tanggalTesBidang" class="form-label">Tanggal Tes Bidang</label>
        <input type="date" class="form-control" id="tanggalTesBidang" name="tanggalTesBidang">
    </div>
    <div class="col-md-3">
        <label for="jam_tb" class="form-label">Jam Tes Bidang</label>
        <input type="time" class="form-control" id="jam_tb" name="jam_tb">
    </div>
    <div class=" col-md-3">
        <label for="nilaiTesBidang1" class="form-label">Nilai Tes Bidang 1</label>
        <input type="number" class="form-control" id="nilaiTesBidang1" name="nilaiTesBidang1">
    </div>
    <div class="col-md-3">
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
        <label for="korektor1" class="form-label">Korektor 1</label>
        <select id="korektor1" class="form-select" name="korektor1">
            <option value="">Choose...</option>
            <?php foreach ($interviewerOptions as $option): ?>
                <option value="<?php echo $option; ?>">
                    <?php echo $option; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-3">
        <label for="nilaiTesBidang2" class="form-label">Nilai Tes Bidang 2</label>
        <input type="number" class="form-control" id="nilaiTesBidang2" name="nilaiTesBidang2">
    </div>
    <div class="col-md-3">
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
        <label for="korektor2" class="form-label">Korektor 2</label>
        <select id="korektor2" class="form-select" name="korektor2">
            <option value="">Choose...</option>
            <?php foreach ($interviewerOptions as $option): ?>
                <option value="<?php echo $option; ?>">
                    <?php echo $option; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="col-md-3">
        <label for="pengumuman" class="form-label">Pengumuman</label>
        <select id="pengumuman" class="form-select" name="pengumuman">
            <option value="">Choose...</option>
            <option value="sudah">Sudah</option>
            <option value="belum">Belum</option>
        </select>
    </div>
    <div class="col-md-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan">
    </div>
    <div class="col-md-3">
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