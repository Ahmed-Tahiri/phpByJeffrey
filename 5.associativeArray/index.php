<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>

<body>
    <?php
    $books = [
        [
            "Book Name" => 'IOT new journey',
            "Author" => "Ahmed Tahiri",
            "Published On" => "27 dec 2023"
        ],
        [
            "Book Name" => 'Biography Of Salah',
            "Author" => "Usman Tareen",
            "Published On" => "19 apr 2023"
        ],
        [
            "Book Name" => 'PHP by Steven',
            "Author" => "Steven Heads",
            "Published On" => "05 jan 2020"
        ],
        [
            "Book Name" => 'How to acheive Life Goals',
            "Author" => "Vikram",
            "Published On" => "16 aug 2008"
        ],
    ] ?>


    <h1>Books of Different Authors</h1>
    <ul>
        <?php
        foreach ($books as $book) {
            echo "<h3>Book Details</h3>";
            foreach ($book as $heading => $info) {
                echo "<li>$heading: $info</li>";
            }
        }
        ?>
    </ul>
</body>

</html>