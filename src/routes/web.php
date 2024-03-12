<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\FunctionController;
use Illuminate\Support\Facades\Schema;


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

Route::get("course", [FunctionController::class, "showCourse"]);

Route::get("profile", [RouteController::class, "profile"]);

// student path

// instructor path

Route::get("course_manager", [InstructorController::class, "courseManager"]);

Route::post("addCourse", [InstructorController::class, "addCourse"]);

// manager path

// Route::get();

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
