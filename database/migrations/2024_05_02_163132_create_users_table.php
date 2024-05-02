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
            $table->id();
            $table->string("uuid");
            $table->string("username")->nullable();
            $table->string("email")->nullable();
            $table->string("password")->nullable();
            $table->integer("play_count")->nullable();
            $table->string("status")->default("ACTIVE");
            $table->integer("is_admin")->default(0);
            $table->timestamps();
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
