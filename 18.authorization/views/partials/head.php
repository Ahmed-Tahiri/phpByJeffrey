<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>
        <?php
        if (urls('/') || urls('/home')) {
            echo "Home Page";
        } else if (urls('/about')) {
            echo "About Page";
        } else if (urls('/notes')) {
            echo "Notes Page";
        } else if (urls('/note')) {
            echo "Your Note's Description";
        } else if (urls('/contact')) {
            echo "Contact Page";
        } else {
            echo "Notes.com";
        }
        ?>
    </title>
</head>

<body class="bg-dark">