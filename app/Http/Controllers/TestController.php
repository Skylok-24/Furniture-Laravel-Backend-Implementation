<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

 class TestController extends Controller
{
    public function mahmoud() {
        return view('welcome');
    }

    public function print($name = "default" ) {
        dd("Hello $name from print function ");
    }
}