<?php

use App\Http\Controllers\API\Posts\CommentController;
use App\Http\Controllers\API\Posts\LikeController;
use App\Http\Controllers\API\Posts\SavedPostController;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/users/{username}', [UserController::class, 'findByUsername']);

    Route::post('/posts/{post_id}/comments', [CommentController::class, 'store']);
    Route::post('/posts/{post_id}/likes', [LikeController::class, 'store']);
    Route::delete('/posts/{post_id}/likes', [LikeController::class, 'destroy']);
    Route::post('/posts/{post_id}/save', [SavedPostController::class, 'save']);

    Route::put('/comments/{comment_id}', [CommentController::class, 'update']);
    Route::delete('/comments/{comment_id}', [CommentController::class, 'destroy']);
    Route::delete('/posts/{post_id}/save', [SavedPostController::class, 'unsave']);
});
