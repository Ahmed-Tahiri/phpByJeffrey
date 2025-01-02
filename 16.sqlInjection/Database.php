<?php

class Database
{
    public $connection;
    public function __construct($config, $username, $password)
    {
        try {
            $dsn = 'mysql:' . http_build_query($config, '', ';');
            $this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        } catch (PDOException $err) {

            die('Error While Connecting to DB: ' . $err->getMessage());
        }
    }
    public function query($query, $params = [])
    {

        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $err) {
            die('Error While Executing Query: ' . $err->getMessage());
        }
    }
}
