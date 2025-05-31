<?php

namespace App\Http\Controllers;

use App\Services\MainOperations;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return "Ola Mundo!";
    }

    public function showHash()
    {
        return MainOperations::generateHash();
    }
}
