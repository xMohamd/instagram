<?php

use App\Http\Controllers\FollowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Authenticated routes
Route::middleware('auth', 'verified')->group(function () {
    Route::get('/', HomeController::class, '__invoke')->name('home');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/hashtag/{hashtag}', [TagController::class, 'hash'])->name('hash');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/{id}',  [UserProfileController::class, 'index'])->name('profile');
    Route::post('/follow', [FollowController::class, 'store'])->name('follow.store');
    Route::delete('/unfollow/{follower_id}/{followed_id}', [FollowController::class, 'destroy'])->name('follow.destroy');
    Route::get('/explore', fn () => view('explore'))->name('explore');
    Route::get('/reels', fn () => view('reels'))->name('reels');
    Route::get('/chat', fn () => view('chat'))->name('chat');
});

// Admin routes
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('admin/trash', [AdminController::class, 'trash'])->name('admin.trash');
    Route::get('admin/edit/{user}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('admin/update/{user}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('admin/delete/{user}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::get('admin/restore/{id}', [AdminController::class, 'restore'])->name('admin.restore');
    Route::delete('admin/trash/{id}', [AdminController::class, 'forceDelete'])->name('admin.forceDelete');
});

// Authentication routes
require __DIR__ . '/auth.php';

// Fallback route
Route::fallback(function () {
    return "Page Not Found";
});
