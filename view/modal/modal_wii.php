<form class="row g-3">
    <div class="col-md-6">
        <label for="selectedIdsInputWII" class="form-label">ID</label>
        <input type="id" class="form-control" id="selectedIdsInputWII">
    </div>
    <div class="col-md-6">
        <label for="waktuInterview" class="form-label">Waktu WII</label>
        <input type="datetime-local" class="form-control" id="waktuInterview">
    </div>
    <div class="col-6">
        <label for="konfirmasiKehadiran" class="form-label">Konfirmasi Kehadiran</label>
        <select id="konfirmasiKehadiran" class="form-select" name="konfirmasiKehadiran">
            <option value="pilih">Choose...</option>
            <option value="bersedia">Bersedia</option>
            <option value="tidak bersedia">Tidak Bersedia</option>
            <option value=" reschedule">Reschedule</option>
        </select>
    </div>
    <div class="col-3">
        <label for="p" class="form-label">P</label>
        <select id="p" class="form-select" name="p">
            <option value="2">Choose...
            </option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>
    <div class="col-3">
        <label for="a" class="form-label">A</label>
        <select id="a" class="form-select" name="a">
            <option value="2">Choose...
            </option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>
    <div class="col-3">
        <label for="k" class="form-label">K</label>
        <select id="k" class="form-select" name="k">
            <option value="2">Choose...
            </option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>
    <div class="col-3">
        <label for="r" class="form-label">R</label>
        <select id="r" class="form-select" name="r">
            <option value="2">Choose...
            </option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="pengumuman" class="form-label">Pengumuman</label>
        <select id="pengumuman" class="form-select" name="pengumuman">
            <option value="pilih">Choose...</option>
            <option value="sudah">Sudah</option>
            <option value="belum">Belum</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="rating" class="form-label">Hasil</label>
        <select id="rating" class="form-select" name="rating">
            <option value="2">Choose...</option>
            <option value="1">Lolos</option>
            <option value="0">Tidak Lolos</option>
        </select>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
</form>