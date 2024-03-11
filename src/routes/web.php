<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\FunctionController;

Route::get("/", [RouteController::class, "index"]) -> name("home");

Route::get("register", [RouteController::class, "register"]) -> name("register");

Route::get("register2", [RouteController::class, "register2"]) -> name("register");

Route::post("webregis", [FunctionController::class, "registerAuth"]) -> name("register");

Route::post("webregis2", [FunctionController::class, "registerDetail"]) -> name("register");

Route::get("login", [RouteController::class, "login"]) -> name("login");

Route::post("linog", [FunctionController::class, "login"]) -> name("login");

// Route for user profile
Route::get('profile/{uid}', [RouteController::class, 'profile'])->name('profile');


// Route for showing user profiles
Route::post("showProfile/{uid}", [FunctionController::class, "showProfile"])->name('showProfile');


//front-end use
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

// Route::get("profile", function () {
//     return view("profile");
// }) -> name("profile");

// Route::get("course/{subject}", function ($subject) {
//     return view("$subject");
// });


Route::get("database", function () {
    return view("database");
});

Route::fallback(function() {
    return view("error");
});

