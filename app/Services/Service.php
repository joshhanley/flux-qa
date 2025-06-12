<?php

namespace App\Services;

class Service
{
    public function toUppercase(string $string): string
    {
        return strtoupper($string);
    }
}
