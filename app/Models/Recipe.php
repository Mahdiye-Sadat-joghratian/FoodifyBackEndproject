<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Recipe extends Model
{
    use HasFactory , HasApiTokens ;

    protected $fillable = [
        'name',
        'image_url',
        'serving',
        'cook_time_hour',
        'cook_time_minute',
        'difficulty',
        'dish_type',
        'dietary_targets',
        'hashtags',
        'introduction',
        'ingredients',
        'steps',

    ];

}
