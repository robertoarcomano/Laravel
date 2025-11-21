<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller1 extends Controller
{
    public function if_controller() {
        $print_my_variable = true;
        $myvariable="OK";
        return view('if_controller', compact("myvariable", "print_my_variable"));
    }
}
