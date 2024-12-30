<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambda Functions</title>
</head>

<body>
    <?
    $books = [
        [
            'name' => "The Coders Life",
            'author' => "Steven Heads",
            'publishedYear' => "2019"
        ],
        [
            'name' => "PHP by William",
            'author' => "Heart William",
            'publishedYear' => "2019"
        ],
        [
            'name' => "JS with Harry",
            'author' => "Haris Harry",
            'publishedYear' => "2021"
        ],
        [
            'name' => "Think Outside Box",
            'author' => "Steven Heads",
            'publishedYear' => "2022"
        ],
        [
            'name' => "DSA with C++",
            'author' => "Haris Harry",
            'publishedYear' => "2022"
        ],
        [
            'name' => "Taste of Laravel",
            'author' => "Heart William",
            'publishedYear' => "2022"
        ],
        [
            'name' => "Be Confident",
            'author' => "Heart William",
            'publishedYear' => "2021"
        ],
    ];
    function filterData($itemsArr, $fn)
    {
        $filteredBooks = [];
        foreach ($itemsArr as $item) {
            if ($fn($item)) {
                $filteredBooks[] = $item;
            };
        }
        return $filteredBooks;
    }

    // By Passing Direct Values:
    // $filteredBooks = filterData($books, 'author', 'Haris Harry');

    // By pasing Function:
    $filteredBooks = filterData($books, function ($book) {
        return $book['author'] === "Steven Heads";
    });


    // Built in function:
    $filteredBooksByFilter = array_filter($books, function ($book) {
        return $book['publishedYear'] <= "2020";
    });
    ?>
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