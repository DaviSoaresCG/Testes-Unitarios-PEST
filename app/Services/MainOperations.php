<?php

namespace App\Services;

class MainOperations{
    public static function generateHash()
    {
        // hash de 32 caracteres
        return bin2hex(random_bytes(16));
    }

    public static function mathOperations($a, $b, $operation)
    {
        // operations math

        switch($operation){
            case 'add':
                return $a+$b;
                break;
            case 'subtract':
                return $a-$b;
                break;
            case 'multiply':
                return $a*$b;
                break;
            case 'divide':
                return $a/$b;
                break;
            default:
                return null;
                break;
        }
    }
}