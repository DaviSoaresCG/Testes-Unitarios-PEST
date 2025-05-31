<?php

namespace App\Services;

class MainOperations{
    public static function generateHash()
    {
        // hash de 32 caracteres
        return bin2hex(random_bytes(16));
    }
}