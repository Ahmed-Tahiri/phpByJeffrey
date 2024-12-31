<?php


function dd($value)
{
    echo "<pre>";
    echo  var_dump($value);
    echo "</pre>";
    die();
}

function urls($value)
{

    if ($_SERVER['REQUEST_URI'] == $value) {
        return true;
    } else {
        return false;
    }
}
