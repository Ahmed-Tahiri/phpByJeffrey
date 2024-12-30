<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Conditionals and Booleans in PHP</title>

</head>

<body>
    <?php
    $book = "Dark Matter";
    $read = true;
    if ($read) {
        $msg = "You Have Read $book";
    } else {
        $msg = "You Have Not Read $book";
    }
    ?>
    <h1>

        <!-- " <?php echo $msg; ?>." -->
        <!-- short hand of writing echo: -->
        " <?= $msg; ?>."
    </h1>
</body>

</html>