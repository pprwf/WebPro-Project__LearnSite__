<?php

namespace App\Http\Controllers;

use App\Http\Controllers\RouteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FunctionController extends Controller
{
    function registerAuth (Request $request) {
        $request -> validate([
            "username" => "required | min: 4 | max: 15",
            "email" => "required | email",
            "password" => "required | min: 8 | confirmed"
        ], [
            "username.required" => "กรุณากรอกชื่อบัญชีผู้ใช้งานที่ท่านต้องการ",
            "username.min" => "กรุณากรอกชื่อบัญชีผู้ใช้งานความยาวอย่างน้อย 4 ตัวอักษร",
            "username.max" => "กรุณากรอกชื่อบัญชีผู้ใช้งานความยาวไม่เกิน 15 ตัวอักษร",
            "email.required" => "กรุณากรอกอีเมลที่ท่านต้องการ",
            "email.email" => "กรุณากรอกอีเมลของท่านให้ถูกต้อง",
            "password.required" => "กรุณากรอกรหัสผ่านบัญชีที่ท่านต้องการ",
            "password.min" => "กรุณากรอกรหัสผ่านความยาวอย่างน้อย 8 ตัวอักษร",
            "password.confirmed" => "กรุณากรอกรหัสผ่านให้ตรงกัน"
        ]);

        $insert = [
            "username" => $request -> username,
            "email" => $request -> email,
            "password" => $request -> password,
        ];

        Session::flash("data", $insert);

        return redirect("register2");
    }

    function registerDetail (Request $request) {
        $request -> validate([
            "fname" => "required | min: 2",
            "lname" => "required | min: 2",
            "phone" => "required | size: 10",
            "role" => "required"
        ]);

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
