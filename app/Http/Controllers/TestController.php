<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        echo "Hello";
        echo '\n World ';
        echo '\n World ';
        echo '\n World ';
    }
}
