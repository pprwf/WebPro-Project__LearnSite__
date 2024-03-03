<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view('index');
}) -> name("home");

Route::get("register", function () {
    return view("regis");
}) -> name("regis");

Route::get("login", function () {
    return view("login");
}) -> name("login");

//font-end use
Route::get("userhome", function () {
    return view("userhome");
}) -> name("userhome");

Route::get("courseinfo", function () {
    return view("courseinfo");
}) -> name("courseinfo");

// Route::get("user_{usr}", function ($usr) {
//     return view("home", $usr);
// }) -> name("user");

Route::get("allcourse", function () {
    return view("allcourse");
}) -> name("allcourse");

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

Route::fallback(function() {
    return view("error");
});