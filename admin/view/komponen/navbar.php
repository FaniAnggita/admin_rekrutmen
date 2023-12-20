<?php

if (isset($_SESSION["nik"])) {
    $nik = $_SESSION["nik"];
    // SQL query to check user credentials
    $sql = "SELECT * FROM `users` WHERE `nik` = '$nik' LIMIT 1";
    $result = mysqli_query($conn, $sql);


    $user = mysqli_fetch_assoc($result);


}
?>
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl">
        <a class="nav-item nav-link px-0 me-xl-4" href="#offcanvasNavbar">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->
            <li class="nav-item lh-1 me-3">
                <a href="device.html" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-bell"></i>
                    <div>
                        <div id="clock">
                        </div>
                    </div>
                </a>
            </li>
            <!-- <li class="nav-item lh-1 me-3">
                <a href="device.html" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-sun"></i>
                    <div>24&deg;C</div>
                </a>
            </li> -->

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="../assets/img/avatars/1.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">
                                        <?php echo $user['name']; ?>
                                    </span>
                                    <small class="text-muted">
                                        <?php echo $user['email']; ?>
                                    </small>
                                </div>
                            </div>

                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>

                    <li>
                        <a class="dropdown-item" href="setting.php">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">Settings</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="logout.php">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>