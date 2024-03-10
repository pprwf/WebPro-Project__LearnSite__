<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Run the migrations.
    public function up(): void
    {
        Schema::create("users", function (Blueprint $table) {
            $table -> id("uid");
            $table -> string("username");
            $table -> string("email") -> unique();
            $table -> string("password");
            $table -> string("fname");
            $table -> string("lname");
            $table -> string("phone");
            $table -> boolean("role");
            $table -> rememberToken();
            $table -> timestamps();
        });
    }

    // Reverse the migrations.
    public function down(): void
    {
        Schema::dropIfExists("users");
    }
};
