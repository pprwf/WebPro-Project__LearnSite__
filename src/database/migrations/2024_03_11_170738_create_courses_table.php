<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create("courses", function (Blueprint $table) {
            $table -> id("courseID");
            $table -> unsignedBigInteger("ownerID");
            $table -> foreign("ownerID") -> references("uid") -> on("users");
            $table -> string("courseName");
            $table -> text("detail");
            $table -> boolean("type");
            $table -> string("courseImage");
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("courses");
    }
};
