<?php

namespace App\Core;

class Database {
    private $connection = null;
    private static $instance = null;

    private function __construct() {
        $this->connect();
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function connect() {
        $host = 'localhost';
        $dbname = 'mvc';
        $username = 'root';
        $password = '@root1707';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        ];

        try {
            $this->connection = new \PDO($dsn, $username, $password, $options);
            return;
        } catch (\PDOException $e) {
            throw new \Exception('Erro de conexão DB: ' . $e->getMessage());
        }

        return false;
    }

    public function query($sql, $params = []) {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (\PDOException $e) {
            throw new \Exception('Erro de consulta ao DB: ' . $e->getMessage());
        }
    }
}

?>