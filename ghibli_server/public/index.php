<?php

session_start();


use App\Autoloader;
use App\Database\Database;
use Src\Http\Requests;

require_once './Autoloader.php';

Autoloader::register();

// $db = Database::getInstance();

// var_dump(
//     $db
//         ->query('SHOW TABLES')
//         ->fetchAll()
// );

$request = Requests::create();

// var_dump($request);