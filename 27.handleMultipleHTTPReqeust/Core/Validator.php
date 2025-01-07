<?php

namespace Core;

class Validator
{

    static public function inputValidator($value, $min = 1, $max = INF)
    {
        $string = trim($value);
        $validationCheck = true;
        if (strlen($string) < $min || strlen($string) > $max || $string === null) {
            $validationCheck = false;
        }
        return $validationCheck;
    }
}
