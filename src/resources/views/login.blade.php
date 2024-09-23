@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header-button')
<div class="header-button">
    <a href="/register" class="header-button--register">register</a>
</div>
@endsection

@section('content')
<div class="login__content">
    <div class="login__content__inner">
        <div class="login__heading">
            <h2>login</h2>
        </div>

        <form class="form" action="/login" method="post">
            @csrf
            <div class="login-form">
                <div class="login-form__inner">
                    <div class="login-form__inner-content">
                        <div class="login-form--content">
                            <div class="login-form__heading">
                                <p>メールアドレス</p>
                            </div>
                            <div class="login-form__input">
                                <input class="login-form__input--text" type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
                            </div>
                            <div class="form__error">
                                <div class="form__error__inner">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="login-form--content">
                            <div class="login-form__heading">
                                <p>パスワード</p>
                            </div>
                            <div class="login-form__input">
                                <input class="login-form__input--text" type="text" name="password" placeholder="例:coachtech1106">
                            </div>
                            <div class="form__error">
                                <div class="form__error__inner">
                                    @error('password')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>  
                    </div>

                    <div class="login-form__button">
                        <button class="login-form__button--submit" type="submit">ログイン</button>
                    </div>
                </div>
            </div>
        </form>   
    </div>    
</div> 
@endsection

