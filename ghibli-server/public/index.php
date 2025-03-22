<?php

use App\Autoloader;
use App\Database\Database;


require_once 'app/Autoloader.php';

Autoloader::register();

$db = Database::getInstance();

var_dump($db
                ->query('SHOW TABLES')
                ->fetchAll()
            );


