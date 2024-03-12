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

Route::get("register", [RouteController::class, "register"]) -> name("register");

Route::post("register", [FunctionController::class, "registerAuth"]);

Route::post("regsiter", [FunctionController::class, "registerDetail"]);

Route::get("login", [RouteController::class, "login"]) -> name("login");

Route::post("login", [FunctionController::class, "login"]);

// student path

Route::prefix("user") -> group(function () {
    Route::get("profile", [RouteController::class, 'profile'])->name('profile');
});

// instructor path

Route::prefix("instructor") -> group(function () {

});

// manager path

Route::prefix("manager") -> group(function () {
    
});

//front-end use

Route::get("course/info", function () {
    return view("courseinfo");
}) -> name("courseinfo");

Route::get("course", function () {
    return view("allcourse");
}) -> name("course");

Route::get("course/manage", function () {
    return view("coursemanage");
}) -> name("coursemanage");

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
