<?php
class Database
{
    private PDO $pdo;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=coursedb;charset=utf8mb4";
        try {
            $this->pdo = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function query($query)
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement;
    }
}