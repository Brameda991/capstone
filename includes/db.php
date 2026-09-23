<?php
$host = "localhost";   // XAMPP default host
$user = "root";        // XAMPP default user
$pass = "";            // XAMPP default password (empty by default)
$db   = "capstone";    // Your database name
$port = 3306;          // Default MySQL port in XAMPP

$conn = mysqli_init();

$conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);

// Use procedural style for clarity
if (!mysqli_real_connect($conn, $host, $user, $pass, $db, $port)) {
    die("Database Connection Failed (" . mysqli_connect_errno() . "): " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
}
?>
