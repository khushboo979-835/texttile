<?php
// Hostinger Database Configuration
$servername = "localhost";
$username = "u467991428_user"; 
$password = "k=N6GKT:VZfG"; 
$dbname = "u467991428_db";


// Set error reporting for mysqli globally (some servers have this by default in PHP 8.1+)
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);

try {
    // Create connection with proper charset
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8mb4");
} catch (mysqli_sql_exception $e) {
    // Log error but don't display to user in production
    error_log("Database Connection failed: " . $e->getMessage());
    die("<div class='alert alert-danger' style='text-align: center; margin-top: 50px;'>Database connection error. Please contact administrator.<br>Error details (remove in production): " . htmlspecialchars($e->getMessage()) . "</div>");
}

// Fallback check for connection and handle errors properly (pre PHP 8.1)
if ($conn->connect_error) {
    error_log("Database Connection failed: " . $conn->connect_error);
    die("<div class='alert alert-danger' style='text-align: center; margin-top: 50px;'>Database connection error. Please contact administrator.<br>Error details (remove in production): " . htmlspecialchars($conn->connect_error) . "</div>");
}
?>
