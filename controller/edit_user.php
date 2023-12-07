<?php

require_once '../koneksi/koneksi.php';
// Get form data
$nik = $_POST['nik'];
$name = $_POST['name'];
$email = $_POST['email'];
$role = $_POST['role'];
$password = $_POST['password']; // This will be empty if not provided

// Validate and hash the password if provided
if (!empty($password)) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $updatePassword = ", password = '$hashedPassword'";
} else {
    $updatePassword = "";
}

// SQL query to update user data
$sql = "UPDATE users SET name = '$name', email = '$email', role = $role $updatePassword WHERE nik = '$nik'";

if ($conn->query($sql) === TRUE) {
    echo "User data updated successfully";
} else {
    echo "Error updating user data: " . $conn->error;
}

$conn->close();