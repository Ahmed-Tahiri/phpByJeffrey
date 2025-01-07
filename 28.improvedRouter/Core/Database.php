<?php

namespace Core;

require_once "Response.php";

use PDO;
use PDOException;
use Core\Response as Response;

class Database
{

    public $connection;
    public $statement;
    public function __construct($config, $username, $password)
    {
        try {
            $dsn = "mysql:" . http_build_query($config, '', ';');
            $this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        } catch (PDOException $err) {
            die('Error While Connecting Database: ' . $err->getMessage());
        }
    }
    public function query($query, $params = [])
    {
        try {
            $this->statement = $this->connection->prepare($query);
            $this->statement->execute($params);
            return $this;
        } catch (PDOException $err) {
            die('Error While Executing Query: ' . $err->getMessage());
        }
    }
    public function findOrFail()
    {
        $result = $this->statement->fetch();
        if (!$result) {
            abort(Response::NOT_FOUND);
        }
        return $result;
    }
    public function get()
    {
        return $this->statement->fetchAll();
    }
    public function authorize($condition, $status = Response::FORBIDDEN)
    {
        if (!$condition) {
            abort($status);
        }
    }
}
