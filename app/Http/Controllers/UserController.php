<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function showName($name)
    {
        return view('example', ['name' => $name]);
    }

    public function suma($num = 0)
    {
        $b = 77;
        return $num + $b;
    }
}
