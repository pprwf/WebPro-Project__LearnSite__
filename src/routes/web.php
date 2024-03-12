<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\FunctionController;


// home path

Route::get("/", [RouteController::class, "index"]);

Route::get("user", [StudentController::class, "index"]);

Route::get("instructor", [InstructorController::class, "index"]);

Route::get("manager", [ManagerController::class, "index"]);

// non-user path

Route::get("register", [RouteController::class, "register"]);

Route::post("register", [FunctionController::class, "registerAuth"]);

Route::post("regsiter", [FunctionController::class, "registerDetail"]);

Route::get("login", [RouteController::class, "login"]);

Route::post("login", [FunctionController::class, "login"]);

Route::get("logout", [FunctionController::class, "logout"]);

// normal path

Route::get("course", [RouteController::class, "showCourse"]);
Route::get("profile", [RouteController::class, "profile"]);

// student path

// instructor path
Route::get("course_manager", [InstructorController::class, "manage"]);

// manager path

Route::prefix("manager") -> group(function () {
    
});

//front-end use

Route::get("info", function () {
    return view("courseinfo");
});

//front end use + test
Route::get("quiz", function () {
    return view("quiz");
});

Route::fallback(function() {
    return view("error");
});
