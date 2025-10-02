<?php

class Validation {

    public static function stringIsSize(string $string, int $min, int $max = PHP_INT_MAX): bool{
    if (strlen($string) < $min || strlen($string) > $max){
        return false;
    }
    else {
        return true;
    }
}
}
