<?php

class Json
{
    public static function importJson(string $path) : null|array
    {
        return json_decode($path, true);
    }
    public static function exportJson(array $data, string $path) : int|false
    {
        $json =  json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($path, $json);
        return $json;
    }
}