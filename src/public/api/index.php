<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../../config/db.php';

echo "test api";

die();

// Gets 'navnelbnr' from URL
$navnelbnr = isset($_GET['navnelbnr']) ? (int) $_GET['navnelbnr'] : 0;

if ($navnelbnr > 0) {
    $query = "SELECT * FROM virksomheder WHERE navnelbnr = :navnelbnr";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':navnelbnr', $navnelbnr, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch();

    if ($result) {
        echo json_encode($result);
    } else {
        echo json_encode(["error" => "Ingen virksomhed fundet med navnelbnr: $navnelbnr"]);
    }
} else {
    echo json_encode(["error" => "Indtast venligst et gyldigt navnelbnr."]);
}