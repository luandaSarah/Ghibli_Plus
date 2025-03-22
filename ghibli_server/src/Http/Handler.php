<?php

namespace Src\Http;
use Src\Http\Requests as Requests;
use Src\Http\Responses as Responses;

class Handler
{
    public function handle(Requests $request): Responses
    {
        $content = "<h1>hyyyyyyyyyyyyyyyyyyy</h1>";

        return new Responses($content);
    }
}
