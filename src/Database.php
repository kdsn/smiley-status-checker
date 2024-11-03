<?php

namespace Src;

use PDO;
use PDOException;

class Database
{
    private $connection;

    public function __construct()
    {
        $config = Config::getDatabaseConfig();
        try {
            $this->connection = new PDO(
                "mysql:host={$config['host']};dbname={$config['name']};charset=utf8",
                $config['user'],
                $config['pass']
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Kald metoden til at initialisere tabellerne
            $this->initializeTables();
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }

    private function initializeTables()
    {
        $sql = "CREATE TABLE IF NOT EXISTS virksomheder (
    navnelbnr INT PRIMARY KEY,
    cvrnr BIGINT,
    pnr BIGINT,
    brancheKode VARCHAR(50),
    branche TEXT,
    virksomhedstype VARCHAR(100),
    navn1 TEXT,
    adresse1 TEXT,
    postnr INT,
    city VARCHAR(100),
    seneste_kontrol INT,
    seneste_kontrol_dato DATETIME,
    naestseneste_kontrol INT,
    naestseneste_kontrol_dato DATETIME,
    tredjeseneste_kontrol INT,
    tredjeseneste_kontrol_dato DATETIME,
    fjerdeseneste_kontrol INT,
    fjerdeseneste_kontrol_dato DATETIME,
    URL VARCHAR(255),
    reklame_beskyttelse BOOLEAN,
    Elite_Smiley BOOLEAN,
    Kaedenavn TEXT,
    Pixibranche TEXT
);";
        try {
            $this->connection->exec($sql);
        } catch (PDOException $e) {
            echo "Fejl ved oprettelse af tabel: " . $e->getMessage();
        }
    }
}
