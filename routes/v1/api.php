<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function () {

    Route::post('/user/store', [UserController::class, 'store']);



    Route::middleware('auth:sanctum')->group(function () {

        Route::get('/user/{user}/show', [UserController::class, 'show']);
        Route::post('/user/{user}/update', [UserController::class, 'update']);
        Route::delete('/user/{user}/delete', [UserController::class, 'destroy']);


        Route::post('/recipe/store', [RecipeController::class, 'store']);
        Route::get('/recipe/{recipe}/show', [RecipeController::class, 'show']);
        Route::post('/recipe/{recipe}/update', [RecipeController::class, 'update']);
        Route::delete('/recipe/{recipe}/delete', [RecipeController::class, 'destroy']);




        Route::post('/follow/store', [FollowController::class, 'store']);
        Route::get('/follow/{follow}/show', [FollowController::class, 'show']);
        Route::post('/follow/{follow}/update', [FollowController::class, 'update']);
        Route::delete('/follow/{follow}/delete', [FollowController::class, 'destroy']);


        Route::post('/comment/store', [CommentController::class, 'store']);
        Route::get('/comment/{comment}/show', [CommentController::class, 'show']);
        Route::post('/comment/{comment}/update', [CommentController::class, 'update']);
        Route::delete('/comment/{comment}/delete', [CommentController::class, 'destroy']);


        Route::post('/collection/store', [CollectionController::class, 'store']);
        Route::get('/collection/{collection}/show', [CollectionController::class, 'show']);
        Route::post('/collection/{collection}/update', [CollectionController::class, 'update']);
        Route::delete('/collection/{collection}/delete', [CollectionController::class, 'destroy']);


        Route::post('/category/store', [CategoryController::class, 'store']);
        Route::get('/category/{category}/show', [CategoryController::class, 'show']);
        Route::post('/category/{category}/update', [CategoryController::class, 'update']);
        Route::delete('/category/{category}/delete', [CategoryController::class, 'destroy']);

        Route::get('/user', function (Request $request) {
            return $request->user();
        });
    });
});
