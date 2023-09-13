<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AkunController;
use App\Models\Post;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', function () {
    $posts = Post::all();
    return view('home', compact('posts'));
});
Route::middleware(['auth'])->group(
    function () {
        Route::get('logout', [AuthenticatedSessionController::class, 'destroy']);

        // Route::get('/log', function () {
        //     return view('dashboard');
        // })->middleware(['other']);
        Route::get('post', [PostController::class, 'index']);
        Route::get('post/{id}', [PostController::class, 'show']);
        Route::get('post-create', [PostController::class, 'create']);
        Route::post('post-create', [PostController::class, 'store']);
        Route::get('post-edit/{id}', [PostController::class, 'edit']);
        Route::post('post-edit/{id}', [PostController::class, 'update']);
        Route::post('post-delete/{id}', [postController::class, 'delete']);
        Route::middleware('author')->group(
            function () {
            }
        );
        Route::middleware('admin')->group(
            function () {
                Route::get('akun', [AkunController::class, 'index']);
                Route::get('akun/{username}', [AkunController::class, 'show']);
                Route::get('akun-create', [AkunController::class, 'create']);
                Route::post('akun-create', [AkunController::class, 'store']);
                Route::get('akun-edit/{username}', [AkunController::class, 'edit']);
                Route::post('akun-edit/{username}', [AkunController::class, 'update']);
                Route::post('akun-delete/{username}', [AkunController::class, 'delete']);
            }
        );
    }
);

require __DIR__ . '/auth.php';
