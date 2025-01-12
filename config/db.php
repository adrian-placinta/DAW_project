<?php
$dsn = "mysql:host=localhost;port=3307;dbname=users"; // Database connection details
$username = "root";  // MySQL username
$password = "admin"; // MySQL root password

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable exception handling for errors
} catch (PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage();
}
