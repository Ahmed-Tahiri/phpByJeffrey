<?php
require_once("functions.php");
// class Person
// {
//     public $name;
//     public $age;

//     public function breathe()
//     {
//         echo "$this->name is breathing";
//     }
// }



// $person1 = new Person();

// $person1->name = "Ahmed";
// $person1->age = 21;
// dd($person1);
// $person2 = new Person();
// $person2->name = "Usman Ali";
// $person2->age = 29;
// dd($person2);

try {
    $dsn = "mysql:host=127.0.0.1;port=3306;dbname=demo;charset=utf8mb4";
    $username = "root";
    $password = "Ahmed1682&9";

    $pdo = new PDO($dsn, $username, $password);
    $query = "SELECT * FROM posts;";
    $statement = $pdo->prepare($query);
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($posts as $key => $value) {
        echo "<h4>User Data:</h4>";
        echo "<ul>
       <li>id: {$value['id']}</li> 
       <li>title: {$value['title']}</li> 
        </ul>";
    }
} catch (PDOException $err) {
    die("Database connection failed: " . $err->getMessage());
}
