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
        Schema::create("courses", function (Blueprint $table) {
            $table -> id("courseID");
            $table -> unsignedBigInteger("ownerID");
            $table -> foreign("ownerID") -> references("uid") -> on("users");
            $table -> string("courseName") -> unique();
            $table -> text("detail");
            $table -> boolean("isLab");
            $table -> boolean("isLecture");
            $table -> string("courseImage");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("courses");
    }
};
