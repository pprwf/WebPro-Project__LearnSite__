<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    function index () {
        $query = session() -> get("query");
        return view("instructorhome", compact("query"));
    }
}