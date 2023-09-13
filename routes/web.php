<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AkunController;
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
    return view('home');
});
Route::middleware(['auth'])->group(
    function () {
        Route::get('logout', [AuthenticatedSessionController::class, 'destroy']);

        // Route::get('/log', function () {
        //     return view('dashboard');
        // })->middleware(['other']);
        Route::middleware('author')->group(
            function () {
                Route::get('post', [PostController::class, 'index']);
            }
        );
        Route::middleware('admin')->group(
            function () {
                Route::get('post', [PostController::class, 'index']);
                Route::get('akun', [AkunController::class, 'index']);
            }
        );
    }
);

require __DIR__ . '/auth.php';
