<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\FunctionController;


// home path

Route::get("/", [RouteController::class, "index"]) -> name("home");

Route::get("user", [StudentController::class, "index"]) -> name("userhome");

Route::get("instructor", [InstructorController::class, "index"]) -> name("instructorhome");

Route::get("manager", [ManagerController::class, "index"]) -> name("managerhome");

// non-user path

Route::get("register", [RouteController::class, "register"]);

Route::post("register", [FunctionController::class, "registerAuth"]);

Route::post("regsiter", [FunctionController::class, "registerDetail"]);

Route::get("login", [RouteController::class, "login"]);

Route::post("login", [FunctionController::class, "login"]);

// normal path

Route::get("course", [RouteController::class, "showCourse"]);

// student path

Route::prefix("user") -> get("profile", [RouteController::class, "profile"])-> name('profile');

// instructor path

Route::prefix("instructor") -> get("profile", [RouteController::class, "profile"])-> name('profile');
Route::prefix("instructor") -> get("course_manager", [InstructorController::class, "manage"]) -> name("managecourse");

// manager path

Route::prefix("manager") -> group(function () {
    
});

//front-end use

Route::get("course/info", function () {
    return view("courseinfo");
}) -> name("courseinfo");

//front end use + test
Route::get("course/quiz", function () {
    return view("quiz");
}) -> name("quiz");

// Route::get("profile", function () {
//     return view("profile");
// }) -> name("profile");

// error handling

Route::fallback(function() {
    return view("error");
});
