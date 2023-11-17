<form class="row g-3" id="form2">

    <div class="col-md-4">
        <label for="selectedIdsInput" class="form-label">ID Terpilih</label>
        <input type="text" class="form-control" id="selectedIdsInputWII" name="selectedIdsInputWII" readonly>
    </div>


    <div class="col-md-4">
        <label for="waktuInterview" class="form-label">Waktu Interview</label>
        <input type="datetime-local" class="form-control" id="waktuInterview" name="waktuInterview"
            value="<?php echo isset($row_wii['waktuInterview']) ? date('Y-m-d\TH:i', strtotime($row_wii['waktuInterview'])) : date('Y-m-d\TH:i'); ?>">
    </div>
    <div class="col-md-4">
        <label for="konfirmasiKehadiran" class="form-label">Konfirmasi Kehadiran</label>
        <select id="konfirmasiKehadiran" class="form-select" name="konfirmasiKehadiran">
            <option value="pilih" <?php echo isset($row_wii['konfirmasiKehadiran_wii']) && $row_wii['konfirmasiKehadiran_wii'] === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
            <option value="bersedia" <?php echo isset($row_wii['konfirmasiKehadiran_wii']) && $row_wii['konfirmasiKehadiran_wii'] === 'bersedia' ? 'selected' : ''; ?>>Bersedia</option>
            <option value="tidak bersedia" <?php echo isset($row_wii['konfirmasiKehadiran_wii']) && $row_wii['konfirmasiKehadiran_wii'] === 'tidak bersedia' ? 'selected' : ''; ?>>Tidak Bersedia</option>
            <option value="reschedule" <?php echo isset($row_wii['konfirmasiKehadiran_wii']) && $row_wii['konfirmasiKehadiran_wii'] === 'reschedule' ? 'selected' : ''; ?>>Reschedule</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="p" class="form-label">P</label>
        <select id="p" class="form-select" name="p">
            <option value="2" <?php echo isset($row_wii['p']) && $row_wii['p'] === '2' ? 'selected' : ''; ?>>Choose...
            </option>
            <option value="1" <?php echo isset($row_wii['p']) && $row_wii['p'] === '1' ? 'selected' : ''; ?>>Yes</option>
            <option value="0" <?php echo isset($row_wii['p']) && $row_wii['p'] === '0' ? 'selected' : ''; ?>>No</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="a" class="form-label">A</label>
        <select id="a" class="form-select" name="a">
            <option value="2" <?php echo isset($row_wii['a']) && $row_wii['a'] === '2' ? 'selected' : ''; ?>>Choose...
            </option>
            <option value="1" <?php echo isset($row_wii['a']) && $row_wii['a'] === '1' ? 'selected' : ''; ?>>Yes</option>
            <option value="0" <?php echo isset($row_wii['a']) && $row_wii['a'] === '0' ? 'selected' : ''; ?>>No</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="k" class="form-label">K</label>
        <select id="k" class="form-select" name="k">
            <option value="2" <?php echo isset($row_wii['k']) && $row_wii['k'] === '2' ? 'selected' : ''; ?>>Choose...
            </option>
            <option value="1" <?php echo isset($row_wii['k']) && $row_wii['k'] === '1' ? 'selected' : ''; ?>>Yes</option>
            <option value="0" <?php echo isset($row_wii['k']) && $row_wii['k'] === '0' ? 'selected' : ''; ?>>No</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="r" class="form-label">R</label>
        <select id="r" class="form-select" name="r">
            <option value="2" <?php echo isset($row_wii['r']) && $row_wii['r'] === '2' ? 'selected' : ''; ?>>Choose...
            </option>
            <option value="1" <?php echo isset($row_wii['r']) && $row_wii['r'] === '1' ? 'selected' : ''; ?>>Yes</option>
            <option value="0" <?php echo isset($row_wii['r']) && $row_wii['r'] === '0' ? 'selected' : ''; ?>>No</option>
        </select>
    </div>

    <div class="col-md-4">
        <label for="pengumuman" class="form-label">Pengumuman</label>
        <select id="pengumuman" class="form-select" name="pengumuman">
            <option value="pilih" <?php echo isset($row_wii['pengumuman_wii']) && $row_wii['pengumuman_wii'] === 'pilih' ? 'selected' : ''; ?>>Choose...</option>
            <option value="sudah" <?php echo isset($row_wii['pengumuman_wii']) && $row_wii['pengumuman_wii'] === 'sudah' ? 'selected' : ''; ?>>Sudah</option>
            <option value="belum" <?php echo isset($row_wii['pengumuman_wii']) && $row_wii['pengumuman_wii'] === 'belum' ? 'selected' : ''; ?>>Belum</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="id_int" class="form-label">Interviewer</label>
        <select id="id_int" class="form-select" name="id_int">
            <?php
            // Your SQL query to fetch data from the 'interviewer' table
            $sql = "SELECT id_int, nama_int FROM interviewer";
            $result = $conn->query($sql);

            // Check if there are results
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    $selected = '';

                    // Check if there is a pre-selected value available
                    if (isset($row_wii['interviewer_wii']) && $row['id_int'] == $row_wii['interviewer_wii']) {
                        $selected = 'selected';
                    }

                    // Generate the options for the select element
                    echo '<option value="' . $row['id_int'] . '" ' . $selected . '>' . $row['nama_int'] . '</option>';
                }
            } else {
                echo '<option value="">No interviewers found</option>';
            }
            ?>
        </select>

    </div>
    <div class="col-md-4">
        <label for="rating" class="form-label">Hasil</label>
        <select id="rating" class="form-select" name="rating">
            <option value="2" <?php echo isset($row_wii['rating_wii']) && $row_wii['rating_wii'] === '2' ? 'selected' : ''; ?>>Choose...</option>
            <option value="1" <?php echo isset($row_wii['rating_wii']) && $row_wii['rating_wii'] === '1' ? 'selected' : ''; ?>>Lolos</option>
            <option value="0" <?php echo isset($row_wii['rating_wii']) && $row_wii['rating_wii'] === '0' ? 'selected' : ''; ?>>Tidak Lolos</option>
        </select>
    </div>
    <div class="col-12 ">

        <button type="submit" class="btn btn-primary">Simpan</button>

    </div>
</form>