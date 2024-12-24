<?php
// Script to insert an admin with a hashed password
$host = "localhost";
$user = "root";
$pass = "";
$db = "login";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add an admin with hashed password
$username = "admin"; // Example username
$password = password_hash("admin123", PASSWORD_DEFAULT); // Example password (hashed)

$sql = "INSERT INTO admins (username, password) VALUES ('$username', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Admin added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
