<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    function index() {
        return view('index');
    }

    function register () {
        return view("regis");
    }
    
    function login () {
        return view("login");
    }
}
