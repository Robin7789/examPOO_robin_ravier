<?php

namespace Src\Manager;

use PDO;
use PDOException;



class DatabaseManager
{

    private PDO $connection;

    public function __construct()
    {

        try {
            $host = "localhost";
            $databaseName = "moto";
            $user = "root";
            $password = "";

            $this->connection = new PDO("mysql:host=" . $host . ";port=3306;dbname=" . $databaseName . ";charset=utf8", $user, $password);

            $this->configPdo();
        } catch (PDOException $e) {
            echo ("Erreur de connexion : " .  $e->getMessage());
            exit();
        }
    }

    private function configPdo(): void
    {
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
