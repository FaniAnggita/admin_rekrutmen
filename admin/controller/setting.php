<?php

require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nik = $_POST['nik'];
    $oldPassword = $_POST['old_password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validate and sanitize the data as needed

    // Check if the old password matches the stored hashed password
    $checkPasswordQuery = "SELECT password FROM users WHERE nik = '$nik'";
    $result = mysqli_query($conn, $checkPasswordQuery);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $storedPasswordHash = $row['password'];

        if (password_verify($oldPassword, $storedPasswordHash)) {
            // Old password is correct, proceed with password update
            if ($newPassword === $confirmPassword) {
                // Hash the new password
                $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);

                // Update the hashed password in the database
                $updateQuery = "UPDATE users SET password = '$hashedNewPassword' WHERE nik = '$nik'";
                if (mysqli_query($conn, $updateQuery)) {
                    echo "Password updated successfully!";
                } else {
                    echo "Error updating password: " . mysqli_error($conn);
                }
            } else {
                echo "Error: New password and confirm password do not match.";
            }
        } else {
            echo "Error: Old password is incorrect.";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request method.";
}
?>