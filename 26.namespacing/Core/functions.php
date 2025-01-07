<?php


function dd($value)
{

    echo "<pre style=font-size:20px;>";
    var_dump($value);
    echo "</pre>";
}


function urls($value)
{
    if (parse_url($_SERVER['REQUEST_URI'])['path'] === $value) {
        return true;
    } else {
        return false;
    }
}
function abort($code = 404)
{
    http_response_code($code);
    require_once(BASE_PATH . "views/{$code}.php");
}
function basePath($path)
{
    return BASE_PATH . $path;
}
function views($path, $attribute = [])
{
    extract($attribute);
    return require basePath('views/') . $path;
}
