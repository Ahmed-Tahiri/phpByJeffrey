<?php


class Database
{
    public $connection;
    function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=demo;charset=utf8mb4;";
        $username = "root";
        $password = "Ahmed1682&9";
        $this->connection = new PDO($dsn, $username, $password);
    }
    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}
