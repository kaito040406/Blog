<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZipController extends Controller
{
    function index(){
        $files = glob(resource_path('auto-mode/'));
        Zipper::make(public_path('auto-mode.zip'))->add($files)->close();

        return response()->download(public_path('auto-mode.zip'));

    }
}
