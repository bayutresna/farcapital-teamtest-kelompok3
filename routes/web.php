<?php

use Illuminate\Support\Facades\Route;

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
    return view('implementasitemplate.contoh');
});
Route::get('/aspirasi/list', [AspirasiController::class, 'index']);
Route::get('/aspirasi/{id}/show', [AspirasiController::class, 'show']);
Route::post('/aspirasi/store', [AspirasiController::class, 'store']);
Route::post('/aspirasi/{id}/update', [AspirasiController::class, 'update']);
Route::post('/aspirasi/{id}/delete', [AspirasiController::class, 'destroy']);
