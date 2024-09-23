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

//✅ホームにアクセスすると入力ページ(contact)が出力される //
Route::get('/', [ContactController::class, 'index']);

//✅入力ページで送信ボタンを押すと確認(confirm)ページに行く//
Route::post('/confirm', [ContactController::class, 'confirm']);

//確認ページで送信ボタンを押すとサンクス(thanks)ページに行く or 修正ボタンを押すと入力画面に行く//
Route::post('/confirm', [ContactController::class, 'store']);






//✅サンクスページでボタンを押すと入力画面に行く//
Route::post('thanks', [ContactController::class, 'home']);




///✅登録画面にアクセスすると登録ページに行く(※UserController)//
Route::get('/register', [UserController::class, 'index']);

//✅登録ボタンを押すとログイン画面に行く//
Route::post('/register', [UserController::class, 'register']);

//ログインの部分(仮)//
Route::post('/login', [UserController::class, 'login']);

Route::middleware('auth')->group (function(){
    Route::get('/admin', [UserController::class, 'admin']);
});


//管理画面の部分（仮）//
Route::middleware('auth')->group(function(){
    Route::post('/admin', [UserController::class, 'login']);
});

