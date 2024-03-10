<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunctionController extends Controller
{
    function register (Request $request) {
        $request -> validate([
            "username" => "required | min: 4 | max: 15",
            "email" => "required",
            "password" => "required | unique | min: 8 | confirmed",
        ]);
    }
}
