<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>

<body>
    <h1>Recommended Books</h1>
    <?php $books = ["Do Andriod Dream of Electric Sheep", "The Langoliers", "Hail Mary"]; ?>
    <ul>
        <?php foreach ($books as $bookNameKey => $bookName) {
            echo "<li>$bookNameKey {$bookName}™</li>";
        } ?>
    </ul>
</body>

</html>