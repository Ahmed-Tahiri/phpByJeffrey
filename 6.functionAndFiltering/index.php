<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions And Filtering in PHP</title>
</head>

<body>
    <?php
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
    function filterBookByAuthor($filter, $booksArr)
    {
        $filteredBook = [];
        foreach ($booksArr as $book) {
            if ($filter === $book['author']) {
                $filteredBook[] = $book;
            };
        }
        return $filteredBook;
    }

    ?>
    <h1>Filtering Books</h1>
    <?php
    echo "<ul>";
    $filteredBooks = filterBookByAuthor("Haris Harry", $books);

    foreach ($filteredBooks as $book) {
        echo "<h3>Book Info:</h3>";

        foreach ($book as $bookKey => $bookVal) {
            echo "<li>$bookKey: $bookVal</li>";
        }
    }

    echo "</ul>";
    ?>


</body>

</html>