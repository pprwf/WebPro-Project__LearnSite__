<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    function index () {
        $query = session() -> get("query");
        return view("manager", compact("query"));
    }
}
