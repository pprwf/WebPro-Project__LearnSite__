<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\FunctionController;

Route::get("/", [RouteController::class, "index"]) -> name("home");

Route::get("register", [RouteController::class, "register"]);

Route::get("register2", [RouteController::class, "register2"]);

Route::post("webregis", [FunctionController::class, "registerAuth"]);

Route::post("webregis2", [FunctionController::class, "registerDetail"]);

Route::get("login", [RouteController::class, "login"]) -> name("login");

//font-end use
Route::get("userhome", function () {
    return view("userhome");
}) -> name("userhome");

Route::get("instructorhome", function () {
    return view("instructorhome");
}) -> name("instructorhome");

Route::get("courseinfo", function () {
    return view("courseinfo");
}) -> name("courseinfo");

Route::get("phpinfo", function () {
    return view("phpinfo");
}) -> name("phpinfo");

// Route::get("user_{usr}", function ($usr) {
//     return view("home", $usr);
// }) -> name("user");

Route::get("allcourse", function () {
    return view("allcourse");
}) -> name("allcourse");

Route::get("coursemanage", function () {
    return view("coursemanage");
}) -> name("coursemanage");

//font end use + test
Route::get("course/quiz", function () {
    return view("quiz");
}) -> name("quiz");

Route::get("profile", function () {
    return view("profile");
}) -> name("profile");

// Route::get("course/{subject}", function ($subject) {
//     return view("$subject");
// });


Route::get("database", function () {
    return view("database");
});

Route::fallback(function() {
    return view("error");
});

