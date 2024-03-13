<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Courses;

class InstructorController extends Controller
{
    function index () {
        $query = session() -> get("query");
        return view("instructorhome", compact("query"));
    }

    function courseManager () {
        $query = session() -> get("query");
        return view("coursemanage", compact("query"));
    }

    function addCourse (Request $request) {
        $request -> validate([
            "name" => "required | min: 2 | unique:courses,courseName",
            "detail" => "required",
            "cover" => "required | image | mimes:png,jpg,jpeg,webp",
            "type" => "array | min:1",
            "type.*" => "in:Lec,Lab"
        ], [
            "name.required" => "• กรุณาระบุชื่อคอร์สเรียนของเรียน",
            "name.min" => "• คอร์สเรียนต้องมีความยาวชื่อไม่ต่ำกว่า 2 ตัวอักษร",
            "name.unique" => "• มีคอร์สเรียนนี้ในระบบแล้ว",
            "detail.required" => "• กรุณาเพิ่มคำอธิบายบทเรียน",
            "cover.required" => "• กรุณาตั้งภาพปกบทเรียน",
            "cover.image" => "• กรุณาเลือกเฉพาะไฟล์รูปภาพ",
            "type.min" => "• กรุณาเลือกประเภทบทเรียน อย่างน้อย 1 ประเภท"
        ]);

        $query = session() -> get("query");

        $insert = [
            "ownerID" => $query -> uid,
            "courseName" => $request -> name,
            "detail" => $request -> detail,
            "courseImage" => Storage::disk('public_uploads') -> put("course_cover", $request -> cover),
            "isLab" => $request -> has("lab") ? 1 : 0,
            "isLecture" => $request -> has("lecture") ? 1 : 0,
        ];

        Courses::insert($insert);

        return redirect() -> back() -> with("query", $query);
    }

    function showInfo($id){
        $cid = Courses::join("users", "courses.ownerID", "=", "users.uid") -> select("*")-> find($id);
        $query = session() -> get("query");
        return view("courseinfo", compact("cid", "query"));
    }
}
