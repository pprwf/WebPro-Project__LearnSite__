<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index () {
        $query = session() -> get("query");
        return view("userhome", compact("query"));
    }
}
