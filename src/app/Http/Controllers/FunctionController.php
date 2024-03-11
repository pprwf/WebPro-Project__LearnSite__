<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class FunctionController extends Controller
{
    function registerAuth(Request $request)
    {
        $request->validate([
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
            "username" => $request->username,
            "phone" => $request->phone,
            "email" => $request->email,
            "password" => $request->password
        ];

        Cookie::queue("data", json_encode($insert), 60);

        return redirect("register2");
    }

    function registerDetail(Request $request)
    {
        $data = json_decode(Cookie::get("data"), true);
        $insert = [
            "username" => $data["username"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"]),
            "fname" => $request->fname,
            "lname" => $request->lname,
            "phone" => $data["phone"],
            "role" => ($request->role == 1) ? 1 : 0
        ];

        User::insert($insert);

        Cookie::queue(Cookie::forget("data"));

        return redirect("/login");
    }

    function login(Request $request)
    {
        $validatedData = $request->validate([
            "account" => "required",
            "password" => "required"
        ], [
            "account.required" => "กรุณาระบุชื่อผู้ใช้งานหรืออีเมลที่ท่านทำการลงทะเบียนไว้",
            "password.required" => "กรุณากรอกรหัสผ่านของท่านที่ลงทะเบียนไว้",
        ]);



        $query = User::where("username", $validatedData['account'])
            ->orWhere("email", $validatedData['account'])
            ->first();

        if ($query != null) {
            if (Hash::check($validatedData['password'], $query->password)) {
                // Save user data in session
                $request->session()->put('user', $query);
                return redirect()->route("profile", ['uid' => $query->uid]);
            } else {
                // Password is incorrect
                $message = "รหัสผ่านผิด";
                return redirect()->back()->with('error', $message);
            }
        } else {
            // Account does not exist
            $message = "บัญชีผู้ใช้ดังกล่าวยังไม่เคยถูกลงทะเบียน";
            return redirect()->back()->with('error', $message);
        }
    }





    function showProfile(Request $request)
    {
        // ดึงข้อมูลผู้ใช้จาก session
        $user = $request->session()->get('user');

        // ตรวจสอบว่ามีข้อมูลผู้ใช้ใน session หรือไม่
        if ($user) {
            return view('profile', ['userData' => $user]); // Passing $user as 'userData'
        } else {
            // หากไม่พบข้อมูลผู้ใช้ใน session ให้เปลี่ยนเส้นทางไปยังหน้าล็อกอิน
            return redirect("/login")->with('error', 'กรุณาล็อกอินเพื่อดูโปรไฟล์');
        }
    }
}
