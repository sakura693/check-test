
@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header-button')
<div class="header-button">
    <a href="/login" class="header-button--login">Login</a>
</div>
@endsection

@section('content')
<div class="register__content">
    <div class="register__content__inner">
        <div class="register__heading">
            <h2>Register</h2>
        </div>

        <form class="form" action="/register" method="post">
            @csrf
            <div class="register-form">
                <div class="register-form__inner">
                    <div class="register-form__inner-content">
                        <div class="register-form--content">
                            <div class="register-form__heading">
                                <p>お名前</p>
                            </div>
                            <div class="register-form__input">
                                <input class="register-form__input--text" type="text" name="name" placeholder="例:山田太郎" value="{{ old('name') }}">
                            </div>
                            <div class="form__error">
                                <div class="form__error__inner">
                                    @error('name')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="register-form--content">
                            <div class="register-form__heading">
                                <p>メールアドレス</p>
                            </div>
                            <div class="register-form__input">
                                <input class="register-form__input--text" type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
                            </div>
                            <div class="form__error">
                                <div class="form__error__inner">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
    
                        <div class="register-form--content">
                            <div class="register-form__heading">
                                <p>パスワード</p>
                            </div>
                            <div class="register-form__input">
                                <input class="register-form__input--text" type="password" name="password" placeholder="例:coachtech1106" value="{{ old('password') }}">
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
            
                    <div class="register-form__button">
                        <button class="register-form__button--register" type="submit">登録</button>
                    </div>
                </div>
            </div>
        </form>   
    </div>    
</div> 
@endsection