@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>

            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="last_name" placeholder="例：山田" value="{{ old('last_name') }}">
                    
                    <div class="form__error">
                        @error('last_name')
                        {{ $message }}
                        @enderror
                    </div>

                    <input type="text" name="first_name" placeholder="例：太郎" value="{{ old('first_name') }}">
                    <div class="form__error">
                        @error('first_name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <label class="radio-button__label" >
                        <input class="radio-button" type="radio" name="gender" value="1" checked>男性
                    </label>
                    <label class="radio-button__label">
                        <input class="radio-button" type="radio" name="gender" value="2">女性
                    </label>
                    <label class="radio-button__label">
                        <input class="radio-button" type="radio" name="gender" value="3">その他
                    </label> 
                </div>
            </div>
            <div class="form__error">
                @error('gender')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
                </div>
            </div>    
            <div class="form__error">
              @error('email')
              {{ $message }}
              @enderror
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <label>
                        <input type="tel" name="tel1" placeholder="080" value="{{ old('tel1') }}">-
                        <div class="form__error">
                            @error('tel1')
                            {{ $message }}
                            @enderror
                        </div>       
                    </label>
                    <label>
                        <input type="tel" name="tel2" placeholder="1234" value="{{ old('tel2') }}">-
                        <div class="form__error">
                            @error('tel2')
                            {{ $message }}
                            @enderror
                        </div> 
                    </label>
                    <label>
                        <input type="tel" name="tel3" placeholder="5678" value="{{ old('tel3') }}">
                        <div class="form__error">
                            @error('tel3')
                            {{ $message }}
                            @enderror
                        </div> 
                    </label>
                </div>    
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ丘1-2-3" value="{{ old('address') }}">
                </div>
            </div>
            <div class="form__error">
                @error('address')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building" placeholder="例: 千駄ヶ丘マンション101" value="{{ old('building') }}">
                </div>
            </div>
            <div class="form__error">
                @error('building')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div 
                class="form__input--text">
                    <div class="select-wrapper">
                        <select name="content">
                            <option value="" disabled selected>選択してください</option>
                            <option value="商品のお届けについて">商品のお届けについて</option>
                            <option value="商品の交換について">商品の交換について</option>
                            <option value="商品トラブル">商品トラブル</option>
                            <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                            <option value="その他">その他</option>
                        </select>
                    </div>
                </div>
                <div class="form__error">
                    @error('content')
                    {{ $message }}
                    @enderror
                </div>
            <div>    
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="detail" cols="60" rows="8" placeholder="お問い合わせ内容をご記入ください">{{ old('detail') }}</textarea>
                </div> 
            </div>
            <div class="form__error">
                @error('detail')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection