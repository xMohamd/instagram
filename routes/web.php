<?php

use App\Http\Controllers\FollowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
use App\Models\Follow;
use App\Models\Media;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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


// Route::get('/dashboard', function () {
//    return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::get('/profile/{id}',  [UserProfileController::class, 'index'])->name('profile');
Route::post('/follow', [FollowController::class, 'store'])->name('follow.store');
Route::delete('/unfollow/{follower_id}/{followed_id}', [FollowController::class, 'destroy'])->name('follow.destroy');

Route::get('/explore', fn () => view('explore'))->name('explore');
Route::get('/reels', fn () => view('reels'))->name('reels');
Route::get('/chat', fn () => view('chat'))->name('chat');


Route::middleware('auth')->group(function () {

    Route::get('/', HomeController::class)->name('home');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
    // Posts
    // Route::get('/posts');
    // Route::post('/posts');
    // Route::get('/posts/create');
    // Route::get('/posts/{id}');
    // Route::get('/posts/{id}/edit');
    // Route::put('/posts/{id}');
    // Route::delete('/posts/{id}');
    // Route::post('/posts/{id}/comments');
    // Route::delete('/posts/{id}/comments/{id}');
    // Route::post('/posts/{id}/comments/{id}/likes');
    // Route::delete('/posts/{id}/comments/{id}/likes');
    // Route::post('/users/{id}/followers');
    // Route::delete('/users/{id}/followers');
    // Route::get('/explore', Explore::class)->name('explore');
    // Route::get('/reels', LivewireReels::class)->name('reels');

    // Route::get('/post/{post}', Page::class)->name('post'); => Require


    // Route::get('/chat', Index::class)->name('chat');
    // Route::get('/chat/{chat}', Main::class)->name('chat.main');

    // Route::get('/profile/{user}', ProfileHome::class)->name('profile.home');
    // Route::get('/profile/{user}/reels', Reels::class)->name('profile.reels');
    // Route::get('/profile/{user}/saved', Saved::class)->name('profile.saved');

});

require __DIR__ . '/auth.php';
Route::fallback(function () {
    return "Page Not Found";
});

Route::middleware(['is_admin'])->group(function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('admin/trash', [AdminController::class, 'trash'])->name('admin.trash');
    Route::get('admin/edit/{user}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('admin/update/{user}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('admin/delete/{user}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::get('admin/restore/{id}', [AdminController::class, 'restore'])->name('admin.restore');
    Route::delete('admin/trash/{id}', [AdminController::class, 'forceDelete'])->name('admin.forceDelete');
});