<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table -> id("uid");
            $table -> string("username");
            $table -> string("password");
            $table -> string("email");
            $table -> string("fname");
            $table -> string("lname");
            $table -> integer("phone");
            $table -> boolean("role");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
