<?php

namespace Src\Http;

use Src\Http\Requests as Requests;
use Src\Http\Responses as Responses;

class Router
{
    public function Router(Requests $request): Responses
    {

        $httpMethod =  $request->getMethod();
        $url =   $request->getUri();

        $url = str_replace("/ghibli_plus/ghibli_server/public/", "", $url);

        $url = explode("/", $url);
        if ($httpMethod === "GET") {

            if (empty($url[0]) || empty($url[1]) || str_contains($url[0], "index")) {
                $content = "HELLO WORLD";
            } else {
                if (preg_match('/^[0-9]+$/', $url[1])) {
                    $content = "controller =>" . $url[0] . " id =>" . $url[1];
                } else {
                    $content = "Params two is not a number";
                }
            }
        }
        return new Responses($content);
    }
}
