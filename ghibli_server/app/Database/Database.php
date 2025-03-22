<?php 

namespace App\Database;

use PDO;
use PDOException;

class Database extends PDO {

    private static ?self $instance = null;

    private const DB_HOST = 'localhost';
    private const DB_NAME = 'ghibli_plus';
    private const DB_USER = 'ghibliPlus_app';
    private const DB_PASSWORD = 'ghiblipswd';


    public function __construct() 
    {
        $dsn = "mysql:host=" . self::DB_HOST . ';dbname=' . self::DB_NAME . ';charset=utf8mb4;' ;

        try {
            parent::__construct(
                $dsn,
                self::DB_USER,
                self::DB_PASSWORD, 
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
                
            );
        } catch (PDOException $e) {
            throw $e;
        }
    }


    public static function getInstance(): self
    {
        
        if(self::$instance === null) {
            self::$instance = new self(); 
        }

        var_dump(self::$instance);
        return self::$instance;
    }
}