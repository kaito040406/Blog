<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main_Controller extends Controller
{
    public function index()
    {
        $str_1 = 'Hello';
        $str_2 = 'World';
        return view('main', compact('str_1', 'str_2') );
    }
}
