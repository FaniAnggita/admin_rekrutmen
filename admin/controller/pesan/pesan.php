<?php

require_once '../../koneksi/koneksi.php';

function konversiHari($hari)
{
    $namaHari = [
        1 => 'Senin',
        2 => 'Selasa',
        3 => 'Rabu',
        4 => 'Kamis',
        5 => 'Jumat',
        6 => 'Sabtu',
        7 => 'Minggu'
    ];

    return $namaHari[(int) $hari];
}

function konversiBulan($bulan)
{
    $namaBulan = [
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    ];

    return $namaBulan[(int) $bulan];
}

$id_pelamar = $_GET['id'];
$sql = "SELECT * FROM pelamar2 JOIN posisi USING(kode_ps) WHERE id = $id_pelamar  LIMIT 1";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);
echo $row['id'] . " - " . $row['nama_lengkap'] . " - " . $row['kode_ps'];
$nama_pelamar = $row['nama_lengkap'];
$gender = $row['gender'] == 'Laki-Laki' ? 'saudara' : 'saudari';
$no_hp = $row['no_hp'];

// Check if the phone number starts with 0
if (is_string($no_hp) && substr($no_hp, 0, 1) === '0') {
    // Replace the leading 0 with 62
    $no_hp = '62' . substr($no_hp, 1);
}
$phone =  $no_hp;
// Now, $no_hp contains the parsed phone number

$kode_ps = $row['nama_ps'];
echo $_GET['pesan'];

$waktu_sekarang = new DateTime();

// Menambahkan 4 jam
$waktu_plus_4_jam = $waktu_sekarang->modify('+4 hours');

// Mendapatkan waktu setelah ditambah 4 jam
$waktu_konfirmasi = $waktu_plus_4_jam->format('H:i');
// WII
if ($_GET['pesan'] == 'wii') {

    $sql_wii = "SELECT * FROM seleksi_wii WHERE id_pelamar = $id_pelamar";
    $result_wii = $conn->query($sql_wii);
    $row_wii = mysqli_fetch_assoc($result_wii);
    $tanggalBulanTahun = '(belum diatur)';
    $jam = '(belum diatur)';

    if (!empty($row_wii['waktuInterview'])) {
        $waktuInterview = $row_wii['waktuInterview'];

        // Mendapatkan informasi waktu
        $tanggal = date('j', strtotime($waktuInterview)); // Tanggal tanpa leading zero
        $bulan = date('n', strtotime($waktuInterview)); // Bulan tanpa leading zero
        $tahun = date('Y', strtotime($waktuInterview)); // Tahun
        $hari = date('N', strtotime($waktuInterview)); // Hari
        $jam = date('H:i', strtotime($waktuInterview)); // Jam dalam format 24 jam
        $standby = (new DateTime($jam))->sub(new DateInterval('PT10M'))->format('H:i');
        $tanggalBulanTahun = konversiHari($hari) . ', ' . $tanggal . ' ' . konversiBulan($bulan) . ' ' . $tahun;
    } else {
        $row_wii['waktuInterview'] = "(belum diset)";
    }


    $teks = "
    Selamat Pagi,
    
    Kami HRD PT Pustaka Insan Madani menginformasikan kepada $gender *$nama_pelamar* bahwa kami akan mengadakan *Walk In Interview* secara online.
    
    Hari dan Tanggal : $tanggalBulanTahun
    Tempat : Video Call by WhatsApp
    Waktu : $jam WIB
    
    Silakan stand by dari pukul $standby , jadwal sewaktu-waktu bisa berubah.
    
    Diharapkan:
    1. Mempersiapkan melalui Aplikasi Video Call by WhatsApp dengan jaringan stabil
    2. Mengenakan pakaian rapi
    3. Menunggu dan tidak berpergian selama belum kami hubungi. Apabila pada saat kami hubungi tidak diangkat (kecuali kendala sinyal), urutan wawancara akan kami jadikan ke urutan terakhir
    
    Harap Konfirmasi
    Nama_Bersedia (paling lambat pukul $waktu_konfirmasi WIB)
    
    *HRD*
    *PT PUSTAKA INSAN MADANI*
    ";

    if ($kode_ps == 'Marketing Area') {
        $teks = "
        Selamat siang,

        Kami HRD PT Pustaka Insan Madani menginformasikan kepada  $gender *$nama_pelamar* bahwa kami akan mengadakan proses seleksi pada Tahap I.

        Pada tahap ini sdra/sdri dapat membuat video perkenalan diri semenarik mungkin dengan memperhatikan beberapa hal.

        Ketentuan video yang dibuat sebagai berikut :
        1. Durasi : maksimal 5 menit
        2. Isi : Perkenalan diri (bebas)
        3. Format pengiriman : Nama_Posisi yang dilamar
        4. Batas pengumpulan video : () pukul () WIB
        5. Diharapkan mengenakan pakaian rapi 

        Link upload video :
        https://docs.google.com/forms/d/e/1FAIpQLSeWrpCexapxViKZbdPpQ4O4qgFHDyPhmi0AgfeYj3wH1MQQnA/viewform

        Apabila sdra/sdri berkenan untuk mengikuti proses seleksi di tahap ini, silakan dapat konfirmasi dengan format berikut: Nama_Bersedia 

        Demikian informasi dari kami, apabila terdapat hal yang belum jelas silakan dapat menghubungi kami. Terima kasih
        ";
    }

    $teks = urlencode($teks);
    header("Location: https://api.whatsapp.com/send?phone=$phone&text=$teks");
}

// Psikotest
if ($_GET['pesan'] == 'psikotest') {

    $sql_wii = "SELECT * FROM seleksi_psikotest WHERE id_pelamar = $id_pelamar";
    $result_wii = $conn->query($sql_wii);
    $row_wii = mysqli_fetch_assoc($result_wii);
    $tanggalBulanTahun = '(belum diatur)';
    $jam = '(belum diatur)';

    if (!empty($row_wii['tanggalPsikotest'])) {
        $waktuInterview = $row_wii['tanggalPsikotest'];

        // Mendapatkan informasi waktu
        $tanggal = date('j', strtotime($waktuInterview)); // Tanggal tanpa leading zero
        $bulan = date('n', strtotime($waktuInterview)); // Bulan tanpa leading zero
        $tahun = date('Y', strtotime($waktuInterview)); // Tahun
        $hari = date('N', strtotime($waktuInterview)); // Hari
        $jam = date('H:i', strtotime($waktuInterview)); // Jam dalam format 24 jam
        $lamatest = (new DateTime($jam))->add(new DateInterval('PT4H'))->format('H:i');
        $standby = (new DateTime($jam))->sub(new DateInterval('PT10M'))->format('H:i');
        $tanggalBulanTahun = konversiHari($hari) . ', ' . $tanggal . ' ' . konversiBulan($bulan) . ' ' . $tahun;
    } else {
        $row_wii['tanggalPsikotest'] = "(belum diset)";
    }


    $teks = "
    Selamat Siang,

    Kami HRD PT Pustaka Insan Madani menginformasikan kepada $gender *$nama_pelamar* bahwa kami akan mengadakan *Psikotest* secara offline.

    Hari dan Tanggal	: *$tanggalBulanTahun*
    Tempat		        : *PT Pustaka Insan Madani Yogyakarta*
    Waktu   		    : *$jam WIB*

    Diharapkan:
    1. Hadir Maks. 15 Menit sebelum jadwal dimulai
    2. Mengenakan pakaian rapi
    3. Wajib menggunakan Masker (Sesuai dengan protokol kesehatan)
    4. Badan dalam kondisi fit

    *Harap Konfirmasi : Nama_Bersedia (sebelum jam $waktu_konfirmasi WIB)*

    HRD 
    PT Pustaka Insan Madani

    Note : 
    1. Silahkan membawa alat tulis pribadi seperti *bolpoin dan pensil*
    2. Tes akan berlangsung hingga pukul +/- $lamatest WIB

    Note : Info lebih lanjut bisa tanyakan kepada kami.
    (Mengenai jadwal tes, konfirmasi dan informasi lainnya)
    ";

    $teks = urlencode($teks);
    header("Location: https://api.whatsapp.com/send?phone=$phone&text=$teks");
}

// indepth
if ($_GET['pesan'] == 'indepth') {

    $sql_wii = "SELECT * FROM seleksi_indepth WHERE id_pelamar = $id_pelamar";
    $result_wii = $conn->query($sql_wii);
    $row_wii = mysqli_fetch_assoc($result_wii);
    $tanggalBulanTahun = '(belum diatur)';
    $jam = '(belum diatur)';

    if (!empty($row_wii['tanggalIndepth'])) {
        $waktuInterview = $row_wii['tanggalIndepth'];

        // Mendapatkan informasi waktu
        $tanggal = date('j', strtotime($waktuInterview)); // Tanggal tanpa leading zero
        $bulan = date('n', strtotime($waktuInterview)); // Bulan tanpa leading zero
        $tahun = date('Y', strtotime($waktuInterview)); // Tahun
        $hari = date('N', strtotime($waktuInterview)); // Hari
        $jam = date('H:i', strtotime($waktuInterview)); // Jam dalam format 24 jam
        $standby = (new DateTime($jam))->sub(new DateInterval('PT10M'))->format('H:i');
        $tanggalBulanTahun = konversiHari($hari) . ', ' . $tanggal . ' ' . konversiBulan($bulan) . ' ' . $tahun;
    } else {
        $row_wii['tanggalIndepth'] = "(belum diset)";
    }


    $teks = "
    Selamat Siang,

    Kami PT Pustaka Insan Madani menginformasikan kepada  $gender *$nama_pelamar*  bahwa kami akan mengadakan Interview HRD Lanjutan secara offline.
    
    Hari dan Tanggal	       : $tanggalBulanTahun
    Tempat		               : PT Pustaka Insan Madani Yogyakarta
    Waktu   		           : $jam WIB
    
    Diharapkan:
    1. Hadir Maks. 15 Menit sebelum jadwal dimulai
    2. Mengenakan pakaian rapi
    3. Wajib menggunakan Masker (Sesuai dengan protokol kesehatan)
    4. Badan dalam kondisi fit
    
    Harap Konfirmasi : Nama_Bersedia (paling lambat pukul $waktu_konfirmasi WIB)
    
    Salam, 
    PT Pustaka Insan Madani
    
    Note : Info lebih lanjut bisa tanyakan kepada kami.
    (Mengenai jadwal tes, konfirmasi dan informasi lainnya)
    ";

    $teks = urlencode($teks);
    header("Location: https://api.whatsapp.com/send?phone=$phone&text=$teks");
}

// tes bidang
if ($_GET['pesan'] == 'tesbidang') {

    $sql_wii = "SELECT * FROM seleksi_tesbidang WHERE id_pelamar = $id_pelamar";
    $result_wii = $conn->query($sql_wii);
    $row_wii = mysqli_fetch_assoc($result_wii);
    $tanggalBulanTahun = '(belum diatur)';
    $jam = '(belum diatur)';

    if (!empty($row_wii['tanggalTesBidang'])) {
        $waktuInterview = $row_wii['tanggalTesBidang'];

        // Mendapatkan informasi waktu
        $tanggal = date('j', strtotime($waktuInterview)); // Tanggal tanpa leading zero
        $bulan = date('n', strtotime($waktuInterview)); // Bulan tanpa leading zero
        $tahun = date('Y', strtotime($waktuInterview)); // Tahun
        $hari = date('N', strtotime($waktuInterview)); // Hari
        $jam = date('H:i', strtotime($waktuInterview)); // Jam dalam format 24 jam
        $standby = (new DateTime($jam))->sub(new DateInterval('PT10M'))->format('H:i');
        $tanggalBulanTahun = konversiHari($hari) . ', ' . $tanggal . ' ' . konversiBulan($bulan) . ' ' . $tahun;
    } else {
        $row_wii['tanggalTesBidang'] = "(belum diset)";
    }


    $teks = "
    Selamat Siang,

    Kami HRD PT Pustaka Insan Madani menginformasikan kepada $gender *$nama_pelamar* bahwa kami akan mengadakan Tes Bidang secara online.
    
    Hari dan Tanggal	       : $tanggalBulanTahun
    Waktu   		           : $jam WIB
    Untuk soal tes akan kami kirimkan pada email 10 menit sebelum waktu pengerjaan tes di mulai
    
    Note : Info lebih lanjut bisa tanyakan kepada kami.
    (Mengenai jadwal tes, konfirmasi dan informasi lainnya)
    
    Terima kasih
    ";

    $teks = urlencode($teks);
    header("Location: https://api.whatsapp.com/send?phone=$phone&text=$teks");
}

// interview user
if ($_GET['pesan'] == 'interviewuser') {

    $sql_wii = "SELECT * FROM seleksi_interviewuser WHERE id_pelamar = $id_pelamar";
    $result_wii = $conn->query($sql_wii);
    $row_wii = mysqli_fetch_assoc($result_wii);
    $tanggalBulanTahun = '(belum diatur)';
    $jam = '(belum diatur)';

    if (!empty($row_wii['tanggalInterviewUser'])) {
        $waktuInterview = $row_wii['tanggalInterviewUser'];

        // Mendapatkan informasi waktu
        $tanggal = date('j', strtotime($waktuInterview)); // Tanggal tanpa leading zero
        $bulan = date('n', strtotime($waktuInterview)); // Bulan tanpa leading zero
        $tahun = date('Y', strtotime($waktuInterview)); // Tahun
        $hari = date('N', strtotime($waktuInterview)); // Hari
        $jam = date('H:i', strtotime($waktuInterview)); // Jam dalam format 24 jam
        $standby = (new DateTime($jam))->sub(new DateInterval('PT10M'))->format('H:i');
        $tanggalBulanTahun = konversiHari($hari) . ', ' . $tanggal . ' ' . konversiBulan($bulan) . ' ' . $tahun;
    } else {
        $row_wii['tanggalInterviewUser'] = "(belum diset)";
    }


    $teks = "
    Selamat Siang,

    Kami HRD PT Pustaka Insan Madani menginformasikan kepada $gender *$nama_pelamar* bahwa kami akan mengadakan Interview User secara offline.
    
    Hari dan Tanggal	       : $tanggalBulanTahun
    Tempat		               : PT Pustaka Insan Madani Yogyakarta
    Waktu   		           : $jam WIB
    
    
    Diharapkan:
    1. Hadir Maks. 15 Menit sebelum jadwal dimulai
    2. Mengenakan pakaian rapi
    3. Wajib menggunakan Masker (Sesuai dengan protokol kesehatan)
    4. Badan dalam kondisi fit
    
    Harap Konfirmasi : Nama_Bersedia (sebelum jam  $waktu_konfirmasi WIB)
    
    HRD
    PT PUSTAKA INSAN MADANI
    
    Note : Info lebih lanjut bisa tanyakan kepada kami.
    (Mengenai jadwal tes, konfirmasi dan informasi lainnya)
    ";

    $teks = urlencode($teks);
    header("Location: https://api.whatsapp.com/send?phone=$phone&text=$teks");
}
