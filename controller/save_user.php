<?php

require_once '../koneksi/koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Gather data from the AJAX request
    $nik = $_POST['nik'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Validate and sanitize the data as needed

    // Check if email already exists in the database
    $checkEmailQuery = "SELECT COUNT(*) as count FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $checkEmailQuery);
    $row = mysqli_fetch_assoc($result);
    $emailCount = $row['count'];

    if ($emailCount > 0) {
        // Email already exists, send an error response
        echo "Error: Email already exists in the database.";
    } else {
        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Save data to the database
        $insertQuery = "INSERT INTO users (nik, name, email, password, role) VALUES ('$nik', '$name', '$email', '$hashedPassword', '$role')";

        if (mysqli_query($conn, $insertQuery)) {
            echo "User data saved successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    // Close the database connection if needed
    // mysqli_close($yourDbConnection);
} else {
    echo "Invalid request method.";
}
?>