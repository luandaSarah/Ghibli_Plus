<?php
use App\Autoloader;
use App\Core\App;
// use App\Models\Movies;

define('DIR_ROOT', dirname(__DIR__)); //define permet de definir une constante

require_once DIR_ROOT . '/Autoloader.php'; // correspond à app/Autoloader.php

Autoloader::register();



$app = new App();


$app->start();
