<?php
include 'komponen/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<form class="row g-3" id="form1" action="../controller/seleksi_administrasi.php" method="post">

    <div class="col-md-4">
        <label for="selectedIdsInput" class="form-label">ID Terpilih</label>
        <input type="text" class="form-control" id="selectedIdsInput" name="selectedIdsInput" readonly>
    </div>
    <div class="col-md-4">
        <label for="tanggal_administrasi" class="form-label">Tanggal Administrasi</label>
        <input type="datetime-local" class="form-control" id="tanggal_administrasi" name="tanggal_administrasi">
    </div>
    <div class="col-md-4">
        <label for="nilaiCv" class="form-label">Penilaian CV</label>
        <select id="nilaiCv" class="form-select" name="nilai_cv">
            <option value="">Choose...</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="nilaiKualifikasi" class="form-label">Penilaian Kualifikasi</label>
        <select id="nilaiKualifikasi" class="form-select" name="nilai_kualifikasi">
            <option value="">Choose...</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="nilaiPengalaman" class="form-label">Penilaian Pengalaman</label>
        <select id="nilaiPengalaman" class="form-select" name="nilai_pengalaman">
            <option value="">Choose...</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan">
    </div>
    <div class="col-md-4">
        <label for="hasil" class="form-label">Hasil</label>
        <select id="hasil" class="form-select" name="hasil_seleksi_adm">
            <option value="">Choose...</option>
            <option value="lolos">Lolos</option>
            <option value="tidak lolos">Tidak Lolos</option>
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>