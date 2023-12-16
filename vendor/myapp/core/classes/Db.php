<?php

namespace myapp;

use PDO,
    PDOException;

class Db
{
    private $connection;
    private $statement;
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection(array $db_config)
    {
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";
        try {
            $this->connection = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
            return $this;
        } catch (PDOException $exception) {
            echo 'Error: ' . $exception->getMessage();
            die;
        }
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }

    public function getAll()
    {
        return $this->statement->fetchAll();
    }

    public function get()
    {
        return $this->statement->fetch();
    }

    public function getColumn()
    {
        return $this->statement->fetchColumn();
    }
}

























