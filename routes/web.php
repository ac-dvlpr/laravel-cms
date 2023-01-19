<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Modules\Users\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;
use Modules\Common\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('main.page');

Route::get('/dashboard', [PostController::class, 'showLastThreePosts'])->middleware(['auth', 'verified', 'userRole'])->name('dashboard');

Route::post('/post', [PostController::class, 'save'])->name('post.save');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.form');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('lang/{lang}', [LocaleController::class, 'switchLanguage'])->name('switch.language');

require __DIR__.'/auth.php';
