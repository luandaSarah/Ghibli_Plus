<?php

namespace Src\Http;

class Responses
{
    public function __construct(
        private ?string $content = '',
        private int $status = 200,  
        private array $headers = []
    ){
        http_response_code($status);
    }

    public function send(): string
    {
        return $this->content;
    }
}