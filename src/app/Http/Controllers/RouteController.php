<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RouteController extends Controller
{
    function index() {
        return view("index");
    }

    function register () {
        $data = [];
        return view("regis", compact("data"));
    }

    function register2 () {
        $data = Session::get("data");
        return view("regis", compact("data"));
    }
    
    function login () {
        return view("login");
    }
}
