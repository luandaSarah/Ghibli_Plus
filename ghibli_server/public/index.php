<?php


use Root\Autoloader;
use App\Database\Database;
use Src\Http\Requests;
use Src\Http\Responses;
use Src\Http\Router;


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
$router = new Router();
$response = $router->Router($request);

echo $response->send();

// var_dump($response);