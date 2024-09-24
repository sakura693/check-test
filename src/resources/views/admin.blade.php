@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection


@section('header-button') 
<form class="header-button" action="/logout" method="post">
    @csrf
    <button class="header-button--logout" type="button">logout</button>
</form>
@endsection

@section('content')
<div class="admin__content">
    <div class="admin__heading">
        <h2>Admin</h2>
    </div>

    
    <form class="form" action="" method="">
        @csrf
        <div class="admin__content-inner">
            <div class="admin__select">
                <input class="admin__input" type="text"  placeholder="名前やメールアドレスを用意してください">
                <div class="select-wrapper">
                    <select class="gender-select">
                        <option value="" disabled selected>性別</option>
                        <option value="全て">全て</option>
                        <option value="男性">男性</option>
                        <option value="女性">女性</option>
                        <option value="その他">その他</option>
                    </select>
                </div>
                <div class="select-wrapper">
                    <select class="textarea" id="">
                        <option value="" disabled selected>お問い合わせの種類</option>
                    </select>
                </div>
                <input class="date" type="date">
                <div class="admin__buttun">
                    <button class="admin__button--search" type="submit">検索</button>
                    <button class="admin__button--reset" type="">リセット</button>
                </div>
            </div>
            <div class="additionla-item">
                <button class="admin__button--export" type="">エクスポート</button>
                <!--ここにページネーションを書く-->
            </div>

            <table class="admin__content-table">
                <tr class="content-table__row">
                    <div class="content-table__th--item">
                        <th class="content-table__th">お名前</th>
                        <th class="content-table__th">性別</th>
                        <th class="content-table__th">メールアドレス</th>
                        <th class="content-table__th">お問い合わせの種類</th>
                    </div>
                    <div class="content-table__td">
                        <!--保存された値を表示-->
                        <tr>
                            <td></td>
                        </tr>
                    </div>
                </tr>
            </table>
        </div>   
    </form>
@endsection