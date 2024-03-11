<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{
    function index() {
        return view("index");
    }

    function register () {
        $data = false;
        return view("regis", compact("data"));
    }

    function register2 () {
        $data = true;
        return view("regis", compact("data"));
    }
    
    function login () {
        return view("login");
    }

    function profile(){
        return view("profile");
    }
}
