<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\AuthController;

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
    return view('frontend.aspirasi.dashboard');
})->name('homepage');

Route::get('/admin', function () {
    return view('frontend.user.dashboard');
})->name('admin')->middleware('withauth');

Route::any('/login', [AuthController::class, 'login'])->name('login')->middleware('noauth');
Route::any('/logout', [AuthController::class, 'logout']) ->name('logout')->middleware('withauth');


Route::prefix('user')
    ->name('user.')
    ->controller(UserController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index')->middleware('withauth');
        Route::get('/detail/{id}', 'detail')->name('detail')->middleware('withauth');
        Route::post('/update/{id}', 'update')->name('update')->middleware('withauth');
        Route::get('/create', 'create')->name('create')->middleware('withauth');
        Route::post('/add', 'store')->name('store')->middleware('withauth');
        Route::post('/delete/{id}', 'destroy')->name('destroy')->middleware('withauth');
    });

Route::prefix('aspirasi')
    ->name('aspirasi.')
    ->controller(AspirasiController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index')->middleware('withauth');
        Route::get('/detail/{id}', 'detail')->name('detail')->middleware('withauth');
        Route::post('/update/{id}', 'update')->name('update')->middleware('withauth');
        Route::get('/create', 'create')->name('create');
        Route::post('/add', 'add')->name('store');
    });
