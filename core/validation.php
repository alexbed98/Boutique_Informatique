<?php

function stringIsSize(string $string, int $min, int $max = PHP_INT_MAX): bool{
    if (mb_strlen($string) < $min || mb_strlen($string) > $max){
        return false;
    }
    else {
        return true;
    }
}