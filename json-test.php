<?php

include 'core/Json.php';

$path = 'src/users.json';

var_dump( Json::importJson($path) );

//=====================================

$path = 'src/json-test.json';

$users = [

    [
        'id' => 1,
        'email' => 'aaa@aaa.com',
        'password' => '12345',
        'role' => 0
    ],
    [
        'id' => 2,
        'email' => 'bbb@bbb.com',
        'password' => '12345',
        'role' => 0
    ],
    [
        'id' => 3,
        'email' => 'ccc@ccc.com',
        'password' => '12345',
        'role' => 0
    ],
    

];

var_dump( Json::exportJson($users,$path) );