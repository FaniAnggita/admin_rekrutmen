<form class="row g-3" id="form1" action="../controller/seleksi_indepth.php" method="post">
    <div class="col-md-6">
        <label for="selectedIdsInputIndepth" class="form-label">ID</label>
        <input type="id" class="form-control" id="selectedIdsInputIndepth" name="selectedIdsInputIndepth" readonly>
    </div>

    <input type="number" name="id_pelamar" value="<?php echo $_GET['id_pelamar']; ?>" hidden>
    <div class="col-md-4">
        <label for="tanggalIndepth" class="form-label">Tanggal Indepth</label>
        <input type="date" class="form-control" id="tanggalIndepth" name="tanggalIndepth">
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
        <label for="KTB" class="form-label">KTB</label>
        <select id="KTB" class="form-select" name="KTB">
            <option value="">
                Choose...</option>
            <option value="1">
                Yes</option>
            <option value="0">
                Tidak Lolos</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="KPR" class="form-label">KPR</label>
        <select id="KPR" class="form-select" name="KPR">
            <option value="">
                Choose...</option>
            <option value="1">
                Yes</option>
            <option value="0">
                Tidak Lolos</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="Siker" class="form-label">Siker</label>
        <select id="Siker" class="form-select" name="Siker">
            <option value="">Choose...</option>
            <option value="1">Yes</option>
            <option value="0">Tidak Lolos</option>
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
    <div class=" col-md-4">
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