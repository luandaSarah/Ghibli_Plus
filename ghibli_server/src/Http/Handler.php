<?php

namespace Src\Http;

use Src\Http\Requests as Requests;
use Src\Http\Responses as Responses;
use Src\Http\Router as Router;


class Handler
{

    private Router $router;


    public function Handler(Requests $request): Responses
    {

        $this->setRouter(new Router);

        $this->handleRoutes();

        $httpMethod =  $request->getMethod();

        $url =   $request->getUri();

        $url = str_replace("/ghibli_plus/ghibli_server/public/", "", $url);

        $url = explode("/", $url);

        if ($httpMethod === "GET") {

            $content = $this->handleGet($url);
        }

        return new Responses($content);
    }

    public function handleRoutes(): void
    {

        //index
        $this
            ->getRouter()
            ->addRoute('index.php', function () {
                return "<h1>HELLO WORLD</h1>";
            });

        //users
        $this
            ->getRouter()
            ->addRoute('users', function () {
                return "<h1>Users</h1>";
            });

        //movies
        $this
            ->getRouter()
            ->addRoute('movies', function () {
                return "<h1>Movies</h1>";
            });

        //directors
        $this
            ->getRouter()
            ->addRoute('directors', function () {
                return "<h1>Directors</h1>";
            });

        //categories
        $this
            ->getRouter()
            ->addRoute('categories', function () {
                return "<h1>Categories</h1>";
            });
    }


    public function handleGet(array $url): string
    {

        return  $this->getRouter()->dispatch($url[0]);
    }


    /**
     * Set the value of router
     */
    public function setRouter($router): self
    {
        $this->router = $router;

        return $this;
    }


    /**
     * Get the value of router
     */

    public function getRouter(): Router
    {
        return  $this->router;
    }
}
