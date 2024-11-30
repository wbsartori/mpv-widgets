<?php

namespace Dashboards\Database;

use PDO;
use PDOException;

class SQLitePdoConnection
{
    /**
     * @var PDO
     */
    private PDO $pdo;

    public function connect(): PDO
    {
        $database = __DIR__ . DIRECTORY_SEPARATOR;
        try {
            $this->pdo = new PDO("sqlite:{$database}" . DIRECTORY_SEPARATOR . 'database.sqlite');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro ao conectar-se com o banco" . $e->getMessage();
        }
        return $this->pdo;
    }

    public function getPdo(): PDO
    {
        return $this->pdo;
    }
}
