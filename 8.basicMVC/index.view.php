<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic MVC</title>
</head>

<body>

    <h1>Lambda Functions in PHP</h1>
    <?php
    echo "<h2>By using Custom Filter</h2>";
    echo "<ul>";
    foreach ($filteredBooks as $book) {
        echo  "<h3>Book Details:</h3>";
        foreach ($book as $bookKey => $bookVal) {
            echo "<li>$bookKey: $bookVal</li>";
        };
    }
    echo  "</ul>";

    // Builtin Function
    echo "<h2>By using Built-in Filter</h2>";
    echo "<ul>";
    foreach ($filteredBooksByFilter  as $book) {

        echo "<h3>Book Details:</h3>";
        foreach ($book as $key => $value) {
            echo "<li>$key: $value</li>";
        }
    }
    echo "</ul>";
    ?>
</body>

</html>