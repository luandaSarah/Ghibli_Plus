<?php

namespace Src\Http;

use Closure;

// use Src\Http\Handler as Handler;

class Router
{
    private array $routes = [];

    //ajoute une nouvelle route 
    public  function addRoute(string $url, Closure $handler): void
    {
       

        $this->routes[$url] = $handler;
    }


    //verifie si la route existe 
    public  function dispatch(string $url): string 
    {
        
        if (array_key_exists($url, array: $this->routes)) {
            $handler =   $this->routes[$url];
            return call_user_func($handler);
        } else {
            return "Cette page n'existe pas";
        }
    }
}
