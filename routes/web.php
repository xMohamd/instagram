<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::middleware('auth', 'verified')->group(function () {

    Route::get('/', HomeController::class)->name('home');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

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