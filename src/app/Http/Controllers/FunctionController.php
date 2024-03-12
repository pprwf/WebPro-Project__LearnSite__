<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class FunctionController extends Controller
{
    function registerAuth (Request $request) {
        $request -> validate([
            "username" => "min: 4 | max: 15 | unique:users,username",
            "phone" => "size: 10 | unique:users,phone",
            "email" => "email | unique:users,email",
            "password" => "min: 8 | confirmed"
        ], [
            "username.min" => "• ชื่อบัญชีผู้ใช้งานต้องมีความยาวอย่างน้อย 4 ตัวอักษร",
            "username.max" => "• ชื่อบัญชีผู้ใช้งานต้องมีความยาวไม่เกิน 15 ตัวอักษร",
            "username.unique" => "• ชื่อบัญชีผู้ใช้งานของท่านเคยถูกใช้งานในระบบแล้ว",
            "phone.size" => "• เบอร์โทรศัพท์ต้องเป็นตัวเลขความยาว 10 ตัว",
            "phone.unique" => "• เบอร์โทรศัพท์ของท่านเคยถูกใช้งานแล้ว",
            "email.email" => "• อีเมลไม่ถูกต้อง",
            "email.unique" => "• อีเมลของท่านเคยถูกใช้งานแล้ว",
            "password.min" => "• รหัสผ่านต้องมีความยาวอย่างน้อย 8 ตัวอักษร",
            "password.confirmed" => "• กรุณากรอกรหัสผ่านให้ตรงกัน"
        ]);

        $insert = [
            "username" => $request -> username,
            "phone" => $request -> phone,
            "email" => $request -> email,
            "password" => $request -> password
        ];

        Cookie::queue("data", json_encode($insert), 60);

        return redirect() -> back() -> with("data", $insert);
    }

    function registerDetail (Request $request) {
        $data = json_decode(Cookie::get("data"), true);
        $insert = [
            "username" => $data["username"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"]),
            "fname" => $request -> fname,
            "lname" => $request -> lname,
            "phone" => $data["phone"],
            "role" => ($request -> role == 1) ? 1 : 0
        ];

        User::insert($insert);

        Cookie::queue(Cookie::forget("data"));

        return redirect("login");
    }

    function login (Request $request) {
        $request -> validate([
            "account" => "required",
            "password" => "required | min: 8"
        ], [
            "account.required" => "• กรุณาระบุชื่อผู้ใช้งานหรืออีเมลที่ได้ลงทะเบียนไว้",
            "password.required" => "• กรุณากรอกรหัสผ่านที่ท่านได้ลงทะเบียนไว้",
            "password.min" => "• รหัสผ่านมีความยาวไม่ถึง 8 ตัวอักษร"
        ]);

        $query = User::where("username", $request -> account) -> orWhere("email", $request -> account) -> first();
        if ($query != null) {
            $pass_check = Hash::check($request -> password, $query -> password);
        }

        if ($query != null && $pass_check) {
            session() -> put("query", $query);
            if ($query -> role == 1) {
                return redirect("user");
            } else if ($query -> role == 0) {
                return redirect("instructor");
            } else if ($query -> isManager != null) {
                return redirect("manager");
            }
        } else {
            $error = ($query == null) ? "• บัญชีผู้ใช้งานไม่ถูกต้อง" : "• รหัสผ่านของท่านไม่ถูกต้อง";
            return redirect() -> back() -> with("error", $error);
        }
    }
}
