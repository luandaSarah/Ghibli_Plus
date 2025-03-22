<?php

namespace App;

class Autoloader
{
    static function register()
    {
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload(string $class): void
    {
        

        // On replace les \ par des /
        $class = str_replace('\\', '/', $class);

        //si le namespace contient Src ou App alors les passer en lowercase
        if (str_contains($class, 'Src')) {

            // $filePath = __DIR__ . '/app/' . $class . '.php';
            $class = str_replace('Src', 'src', $class);
        }

        if (str_contains($class, 'App')) {

            $class = str_replace('App', 'app', $class);
        }

        
        $filePath = __DIR__ . '/' . $class . '.php';
        // On vérifie si le fichier existe
        if (file_exists($filePath)) {
            // On inclu  du fichier
            require_once $filePath;
            // echo $filePath;
        } 
    }
}
