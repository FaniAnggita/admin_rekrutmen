<form class="row g-3" id="form1" action="../controller/seleksi_tesbidang.php" method="post">
    <div class="col-md-4">
        <label for="selectedIdsInputTesBidang" class="form-label">ID Terpilih</label>
        <input type="text" class="form-control" id="selectedIdsInputTesBidang" name="selectedIdsInputTesBidang"
            readonly>
    </div>
    <div class="col-md-4">
        <label for="tanggalTesBidang" class="form-label">Tanggal Tes Bidang</label>
        <input type="date" class="form-control" id="tanggalTesBidang" name="tanggalTesBidang">
    </div>
    <div class=" col-md-4">
        <label for="nilaiTesBidang1" class="form-label">Nilai Tes Bidang 1</label>
        <input type="number" class="form-control" id="nilaiTesBidang1" name="nilaiTesBidang1">
    </div>

    <div class="col-md-4">
        <label for="nilaiTesBidang2" class="form-label">Nilai Tes Bidang 2</label>
        <input type="number" class="form-control" id="nilaiTesBidang2" name="nilaiTesBidang2">
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