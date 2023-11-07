<?php

session_start();
// session_destroy();
unset($_SESSION['smarthome_user']);
unset($_SESSION['smarthome_role']);
unset($_SESSION['smarthome_name']);
unset($_SESSION['login_error']);
unset($_SESSION['user_detail']);

header("Location: login.php");
