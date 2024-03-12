<?php

namespace App\Http\Controllers;

use App\Models\User;

class RouteController extends Controller
{
    function index() {
        return view("index");
    }

    function register () {
        $data = session() -> get("data");
        return view("regis", compact("data"));
    }
    
    function login () {
        $error = session() -> get("error");
        return view("login", compact("error"));
    }

    function showCourse () {
        $query = session() -> get("query");
        return view("allcourse", compact("query"));
    }

    function profile () {
        $user = session() -> get("query");
        return view("profile", compact("user"));
    }
}
