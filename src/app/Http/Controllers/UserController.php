<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    //登録画面の表示//
    public function index(){
        return view('register');
    }

    //ログイン画面に遷移//
   public function register(UserRequest $request){
    $register = $request->only(['name', 'email', 'password']);

    $register['password'] = bcrypt($register['password']);
    User::create($register);

    return view('login', compact('register'));
   }



   public function login(UserRequest $request){
    $login = $request ->only(['email', 'password']);
    if (Auth::attempt($login)){
        return redirect('admin');
    }
    return back();
   }

   //仮：管理画面出力//
   public function admin(){
    return view('admin');
   }


}
