<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create("users", function (Blueprint $table) {
            $table -> id("uid");
            $table -> string("username") -> unique();
            $table -> string("email") -> unique();
            $table -> string("password");
            $table -> string("fname");
            $table -> string("lname");
            $table -> string("phone") -> unique();
            $table -> boolean("role");
            $table -> Boolean("isManager") -> nullable();
            $table -> string("picture") -> nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("users");
    }
};
