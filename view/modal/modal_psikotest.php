<!-- Form Psikotest -->
<form class="row g-3" id="form1" action="../controller/seleksi_psikotest.php" method="post">

    <div class="col-md-4">
        <label for="selectedIdsInput" class="form-label">ID Terpilih</label>
        <input type="text" class="form-control" id="selectedIdsInputPsikotest" name="selectedIdsInputPsikotest"
            readonly>
    </div>
    <div class="col-md-4">
        <label for="tanggalPsikotest" class="form-label">Tanggal Psikotest</label>
        <input type="date" class="form-control" id="tanggalPsikotest" name="tanggalPsikotest">
    </div>
    <div class=" col-md-4">
        <label for="konfirmasiKehadiran" class="form-label">Konfirmasi Kehadiran</label>
        <select id="konfirmasiKehadiran" class="form-select" name="konfirmasiKehadiran">
            <option value="">Choose...</option>
            <option value="bersedia">>Bersedia</option>
            <option value="tidak bersedia">Tidak Bersedia</option>
            <option value="reschedule">Reschedule</option>
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

    <div class="col-md-8">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan" ">
    </div>
    <div class=" col-md-4">
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