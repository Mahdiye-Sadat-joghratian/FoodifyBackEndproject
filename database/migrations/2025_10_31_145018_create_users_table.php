<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 150)->unique();
            $table->string('password');
            $table->string('profile_picture')->nullable();
            $table->string('cover_photo')->nullable();
            $table->longText('bio')->nullable();
            $table->unsignedInteger('follower_count')->default(0);
            $table->unsignedInteger('following_count')->default(0);
            $table->string('country', 50)->nullable();
            $table->string('phone')->unique()->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->index('name');
            $table->index('country');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
