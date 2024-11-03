<?php

require_once __DIR__ . '/../src/Config.php';
require_once __DIR__ . '/../src/Database.php';

use Src\Database;

// Start en databaseforbindelse og test den
try {
    $db = new Database();
    $connection = $db->getConnection();
    if ($connection) {
        echo "Databaseforbindelse er oprettet!";
    } else {
        echo "Kunne ikke oprette databaseforbindelse.";
    }
} catch (Exception $e) {
    echo "Fejl: " . $e->getMessage();
}
