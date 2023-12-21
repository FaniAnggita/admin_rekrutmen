<?php

if (isset($_SESSION["nik"])) {
    $nik = $_SESSION["nik"];
    // SQL query to check user credentials
    $sql = "SELECT * FROM `users` WHERE `nik` = '$nik' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
}
?>

<nav class="navbar sticky-top bg-light shadow-none">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../assets/img/logo_main.png" alt="..." height="30"> | Rekrutmen App
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'index')
                            echo 'active'; ?>" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i>
                            Beranda</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if ($page == 'master')
                            echo 'active'; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-table"></i> Master
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="posisi.php">Posisi/Jabatan</a></li>
                            <li><a class="dropdown-item" href="lowongan.php">Lowongan</a></li>
                            <li><a class="dropdown-item" href="interviewer.php">Interviewer/korektor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'proses_rekrut')
                            echo 'active'; ?>" aria-current="page" href="proses_rekrutmen.php"><i
                                class="fa-solid fa-pen-to-square"></i>
                            Proses Rekrutmen</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if ($page == 'respon_kandidat')
                            echo 'active'; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-briefcase"></i> Master Pelamar
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="respon_kandidat.php">Semua Pelamar</a></li>
                            <li><a class="dropdown-item" href="respon_kandidat_lolos.php">Pelamar Lolos</a></li>
                            <li><a class="dropdown-item" href="respon_kandidat_tidak_lolos.php">Pelamar Tidak Lolos</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if ($page == 'user')
                            echo 'active'; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user-gear"></i> Users
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="add_user.php">Add User</a></li>
                            <li><a class="dropdown-item" href="user_management.php">User Management</a></li>
                        </ul>
                    </li>

                    <hr class="dropdown-divider">
                    </li>

                </ul>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                        id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../assets/img/avatars/1.png" alt="" width="32" height="32"
                            class="rounded-circle me-2">
                        <strong>
                            <?php echo $user['name']; ?>
                        </strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        <li><a class="dropdown-item" href="setting.php">Settings</a></li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>