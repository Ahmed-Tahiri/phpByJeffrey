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

require_once "./index.view.php";
