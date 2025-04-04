<?php


use Root\Autoloader;
use App\Database\Database;
use Src\Http\Requests;
use Src\Http\Responses;
use Src\Http\Handler;


require_once '../Autoloader.php';


Autoloader::register();

// $db = Database::getInstance();

// var_dump(
//     $db
//         ->query('SHOW TABLES')
//         ->fetchAll()
// );

$request = Requests::create();

// session_start();


// $content = "hello world";
$handler = new Handler();
$response = $handler->Handler($request);

echo $response->send();

// var_dump($response);