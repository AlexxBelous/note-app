<?php

class Database
{
    public $connection;
    public function __construct()
    {
        $dsn = "mysql:host=mysql;port=3306;dbname=myApp;charset=utf8mb4";
        $userName = "root";
        $userPass = "root";
        $this->connection = new PDO($dsn, $userName, $userPass);
    }
    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}