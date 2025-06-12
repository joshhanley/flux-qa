<?php

namespace App\Services;

class Service2
{
    public function toUppercase(string $string): string
    {
        return str($string)->camel()->toString();
    }
}
