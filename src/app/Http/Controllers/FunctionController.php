<?php

namespace App\Http\Controllers;

use App\Http\Controllers\RouteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FunctionController extends Controller
{
    function registerAuth (Request $request) {
        // $request -> validate([
        //     "username" => "required | min: 4 | max: 15",
        //     "email" => "required",
        //     "password" => "required | unique | min: 8 | confirmed",
        // ]);

        $insert = [
            "username" => $request -> username,
            "email" => $request -> email,
            "password" => $request -> password,
        ];

        Session::flash("data", $insert);

        return redirect("register2");
    }

    function registerDetail (Request $request) {

        // $detail = json_decode($request -> input("data"), true);
        // dd($request->hid2);
        // dd($request->fname);
        $data = Session::get("data");
        $insert = [
            "username" => $data ["username"],
            "email" => $data ["email"],
            "password" => $data ["password"],
            "fname" => $request -> fname,
            "lname" => $request -> lname,
            "phone" => $request -> phone,
            "role" => ($request -> role == 1) ? 1 : 0,
        ];

        DB::table("users") -> insert($insert);

        return redirect("/login");
    }
}
