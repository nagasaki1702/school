<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class)->name('home');

Route::get('/blog', [PostController::class,'index'])->name('posts.index');

// RoutServiceProvider.phpの修正がうまくいかなかったので、ダッシュボードが来たら、homeが表示されるようにとりあえず編集している。
// 後から影響があるかもしれないので、メモ！
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('http://127.0.0.1:8000/');
    })->name('dashboard');
});
