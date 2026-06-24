<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string( 'recipe_code')->nullable();
            $table->string('name');
            $table->string('image_url')->nullable();
            $table->string('serving');

            $table->string('cook_time_hour');
            $table->string('cook_time_minute');
            $table->string('difficulty');
            $table->string('dish_type');
            $table->string('dietary_targets')->nullable();
            $table->string('hashtags')->nullable();
            $table->text('introduction');
            $table->text('ingredients');
            $table->text('steps');
            $table->timestamps();
            $table->index('name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
