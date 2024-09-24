<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;

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

//お問い合わせ画面に遷移//
Route::get('/', [ContactController::class, 'index']);

//確認画面に遷移//
Route::post('/confirm', [ContactController::class, 'confirm']);


Route::post('/thanks', [ContactController::class, 'store']);

//入力画面に遷移//
Route::post('thanks', [ContactController::class, 'home']);


///登録画面に遷移//
Route::get('/register', [UserController::class, 'index']);

//ログイン画面に遷移//
Route::post('/register', [UserController::class, 'register']);


Route::post('/login', [UserController::class, 'login']);

Route::middleware('auth')->group (function(){
    Route::get('/admin', [UserController::class, 'admin']);
});

Route::middleware('auth')->group(function(){
    Route::post('/admin', [UserController::class, 'login']);
});

