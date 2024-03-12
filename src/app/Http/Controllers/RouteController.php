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

    function profile($uid)
    {
        
        $user = User::find($uid);
        
    
        if (!$user) {
            abort(404); 
        }
        

        return view("profile", compact("user"));
    }
}
