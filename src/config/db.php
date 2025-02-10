<?php
// Indlæs miljøvariabler fra .env
$env = parse_ini_file(__DIR__ . '/../../.env');

$host = $env['PRODUCTION_DB_HOST'] ?? 'localhost';
$dbname = $env['PRODUCTION_DB_NAME'] ?? 'dbname';
$user = $env['PRODUCTION_DB_USER'] ?? 'dbuser';
$pass = $env['PRODUCTION_DB_PASS'] ?? 'pass';

// Opret forbindelse med PDO
try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Smid fejl som exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Hent som associative arrays
        PDO::ATTR_EMULATE_PREPARES => false, // Brug ægte prepared statements
    ];

    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
