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
    static public function emailValidator($value, $min = 1, $max = INF)
    {
        $string = trim($value);
        $validationCheck = true;
        if (!Validator::inputValidator($string, $min, $max)) {
            $validationCheck = false;
        }
        if (!filter_var($string, FILTER_VALIDATE_EMAIL)) {
            $validationCheck = false;
        }
        return $validationCheck;
    }
}
