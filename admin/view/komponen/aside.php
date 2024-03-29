<?php

if (isset($_SESSION["nik"])) {
    $nik = $_SESSION["nik"];
    // SQL query to check user credentials
    $sql = "SELECT * FROM `users` WHERE `nik` = '$nik' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
}
?>

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.php" class="app-brand-link">
            <span class="app-brand-logo demo">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2"><img src="../assets/img/logo_main.png" alt=""
                    srcset="" width="180px"></span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item <?php if ($page == 'index')
            echo 'active'; ?>">
            <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <!-- Device -->
        <li class="menu-item  <?php if ($page == 'master')
            echo 'active'; ?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Account Settings">Master</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="posisi.php" class="menu-link">
                        <div data-i18n="semua">Posisi/Jabatan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="lowongan.php" class="menu-link">
                        <div data-i18n="tidak lolos">Lowongan</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="interviewer.php" class="menu-link">
                        <div data-i18n="tidak lolos">Interviewer/korektor</div>
                    </a>
                </li>

            </ul>
        </li>

        <!-- Report -->
        <li class="menu-item <?php if ($page == 'proses_rekrut')
            echo 'active'; ?>">
            <a href="proses_rekrutmen.php" class="menu-link ">
                <i class="menu-icon tf-icons bx bx-edit-alt"></i>
                <div data-i18n="device">Proses Rekrutmen</div>
            </a>
        </li>
        <!-- Respon Kandidat -->
        <li class="menu-item  <?php if ($page == 'respon_kandidat')
            echo 'active'; ?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Account Settings">Master Pelamar</div>
            </a>
            <ul class="menu-sub">

                <li class="menu-item">
                    <a href="respon_kandidat.php" class="menu-link">
                        <div data-i18n="semua">Semua</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="respon_kandidat_lolos.php" class="menu-link">
                        <div data-i18n="respon_kandidat_lolos">Lolos</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="respon_kandidat_tidak_lolos.php" class="menu-link">
                        <div data-i18n="tidak lolos">Tidak Lolos</div>
                    </a>
                </li>

            </ul>
        </li>
        <!-- User Mng -->
        <?php if ($user['role'] == 1) { ?>
            <li class="menu-item  <?php if ($page == 'user')
                echo 'active'; ?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Account Settings">User</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="add_user.php" class="menu-link">
                            <div data-i18n="semua">Add User</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="user_management.php" class="menu-link">
                            <div data-i18n="">User Management</div>
                        </a>
                    </li>
                </ul>
            </li>
        <?php } ?>


        <!-- Setting -->
        <li class="menu-item <?php if ($page == 'setting')
            echo 'active'; ?>">
            <a href="setting.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="device">Setting</div>
            </a>
        </li>

    </ul>
</aside>