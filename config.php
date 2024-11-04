<?php
// Load .env variables
if (file_exists(__DIR__ . '/.env')) {
    $dotenv = fopen(__DIR__ . '/.env', 'r');
    while (($line = fgets($dotenv)) !== false) {
        putenv(trim($line));
    }
    fclose($dotenv);
}

// Database credentials
$db_host = getenv('DB_HOST');
$db_username = getenv('DB_USERNAME');
$db_password = getenv('DB_PASSWORD');
$db_database = getenv('DB_DATABASE');

// Create a connection
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
