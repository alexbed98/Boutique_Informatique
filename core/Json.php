<?php

class Json
{
    public static function importJson(string $path) : array
    {
        $text = file_get_contents($path);
        return json_decode($text, true);
    }
    public static function exportJson(array $data, string $path) : int|false
    {
        $json =  json_encode($data, JSON_PRETTY_PRINT);
        return file_put_contents($path, $json);
    }
}
