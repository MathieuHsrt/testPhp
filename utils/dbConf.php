<?php
global $dbs;
$dbs = [
    'default' => [
        'HOST' => '127.0.0.1',
        'PORT' => 3306,
        'USERNAME' => 'root',
        'PASSWORD' => 'root',
        'DATABASE' => 'voyage_company',
        'CHARSET' => 'utf8'
    ]
];

function getPDO($db = 'default') : PDO
{
    global $dbs;
    $theDB = $dbs[$db];

    $host = $theDB['HOST'];
    $dbname = $theDB['DATABASE'];
    $usename = $theDB['USERNAME'];
    $pwd = $theDB['PASSWORD'];
    $charset = $theDB['CHARSET'];

    return new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $usename, $pwd);
}
