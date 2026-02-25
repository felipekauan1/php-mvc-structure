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

    // retorna um único resultado da consulta
    public function fetch($sql, $params = []): array {
        $stmt = $this->query($sql, $params);
        return $stmt->fetch();
    }

    // retorna um array com dados da consulta
    public function fetchAll($sql, $params = []): array {
        $stmt = $this->query($sql, $params);
        return $stmt->fetchAll();
    }

    // retorna o rowCount
    public function execute($sql, $params = []): int {
        $stmt = $this->query($sql, $params);
        return $stmt->rowCount();
    }

    // retorna o último ID inserido
    public function lastInsertId($sql, $params = []): int {
        return $this->connection->lastInsertId();
    }

    // retorna o número de linhas afetadas
    public function rowCount($sql, $params = []): int {
        return $this->connection->rowCount();
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