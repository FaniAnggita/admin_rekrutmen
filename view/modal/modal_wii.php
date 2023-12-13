<form class="row g-3" id="form1" action="../controller/seleksi_wii.php" method="post">
    <div class="col-md-6">
        <label for="selectedIdsInputWII" class="form-label">ID</label>
        <input type="id" class="form-control" id="selectedIdsInputWii" name="selectedIdsInputWii" readonly>
    </div>
    <div class="col-md-6">
        <label for="waktuInterview" class="form-label">Waktu WII</label>
        <input type="date" class="form-control" id="waktuInterview" name="waktuInterview">
    </div>
    <div class="col-6">
        <label for="konfirmasiKehadiran" class="form-label">Konfirmasi Kehadiran</label>
        <select id="konfirmasiKehadiran" class="form-select" name="konfirmasiKehadiran">
            <option value="">Choose...</option>
            <option value="Bersedia">Bersedia</option>
            <option value="Tidak bersedia">Tidak Bersedia</option>
            <option value="Reschedule">Reschedule</option>
        </select>
    </div>
    <div class="col-3">
        <label for="p" class="form-label">P</label>
        <select id="p" class="form-select" name="p">
            <option value="">Choose...
            </option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>
    <div class="col-3">
        <label for="a" class="form-label">A</label>
        <select id="a" class="form-select" name="a">
            <option value="">Choose...
            </option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>
    <div class="col-3">
        <label for="k" class="form-label">K</label>
        <select id="k" class="form-select" name="k">
            <option value="">Choose...
            </option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>
    <div class="col-3">
        <label for="r" class="form-label">R</label>
        <select id="r" class="form-select" name="r">
            <option value="">Choose...
            </option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
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
        <label for="interviewer_wii" class="form-label">Interviewer</label>
        <select id="interviewer_wii" class="form-select" name="interviewer_wii">
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
            <option value="Sudah">Sudah</option>
            <option value="Belum">Belum</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="akun_platform" class="form-label">Akun Platform</label>
        <input type="text" class="form-control" id="akun_platform" name="akun_platform">
    </div>
    <div class="col-md-6">
        <label for="rating" class="form-label">Hasil</label>
        <select id="rating" class="form-select" name="rating">
            <option value="">Choose...</option>
            <option value="lolos">Lolos</option>
            <option value="tidak lolos">Tidak Lolos</option>
        </select>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>