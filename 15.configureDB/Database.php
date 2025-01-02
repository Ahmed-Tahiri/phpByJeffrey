<?php
class Database
{
    public $connection;

    public function __construct($config, $username, $password)
    {
        try {
            $dsn = 'mysql:' . http_build_query($config, "", ";");
            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $err) {
            die("Error While Connecting Database:" . $err->getMessage());
        }
    }
    public function query($query)
    {
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute();
            return $statement;
        } catch (PDOException $err) {
            die("Error While Fetching Data: " . $err->getMessage());
        }
    }
}
