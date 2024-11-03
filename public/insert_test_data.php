<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Config.php';
require_once __DIR__ . '/../src/Database.php';

use Src\Database;

try {
    // Opret databaseforbindelsen
    $db = new Database();
    $connection = $db->getConnection();

    // SQL-query til indsættelse af testdata
    $sql = "INSERT INTO virksomheder (
                navnelbnr, cvrnr, pnr, navn1, adresse1, postnr, city, 
                seneste_kontrol, seneste_kontrol_dato
            ) VALUES (
                :navnelbnr, :cvrnr, :pnr, :navn1, :adresse1, :postnr, :city, 
                :seneste_kontrol, :seneste_kontrol_dato
            )";

    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':navnelbnr', $navnelbnr);
    $stmt->bindParam(':cvrnr', $cvrnr);
    $stmt->bindParam(':pnr', $pnr);
    $stmt->bindParam(':navn1', $navn1);
    $stmt->bindParam(':adresse1', $adresse1);
    $stmt->bindParam(':postnr', $postnr);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':seneste_kontrol', $seneste_kontrol);
    $stmt->bindParam(':seneste_kontrol_dato', $seneste_kontrol_dato);

    // Testdata
    $navnelbnr = 1;
    $cvrnr = 12345678;
    $pnr = 1234;
    $navn1 = "Test Virksomhed";
    $adresse1 = "Testvej 123";
    $postnr = 8000;
    $city = "Aarhus";
    $seneste_kontrol = 5;
    $seneste_kontrol_dato = "2023-10-20 12:00:00";

    // Udfør indsættelsen
    if ($stmt->execute()) {
        echo "Testdata indsat i databasen!";
    } else {
        echo "Fejl ved indsættelse af data.";
    }
} catch (Exception $e) {
    echo "Fejl: " . $e->getMessage();
}
