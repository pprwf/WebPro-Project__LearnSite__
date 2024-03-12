<?php

namespace App\Http\Controllers;

use App\Models\Courses;

class RouteController extends Controller
{
    function index() {
        $courses = Courses::join("users", "courses.ownerID", "=", "users.uid") -> select("courses.*", "users.picture") -> get();
        session() -> put("join", $courses);
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

    function profile () {
        $query = session() -> get("query");
        return view("profile", compact("query"));
    }
}
