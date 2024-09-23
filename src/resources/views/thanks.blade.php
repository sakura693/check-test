<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
</head>

<body>
    <div class="main">
        <form action="/thanks" method="post">
            @csrf
            <div class="background-text">Thank you</div>
            <div class="content">
                <p class="content__text">お問い合わせありがとうございました</p>
                <button class="content__button-home" type="submit">HOME</button>
            </div>
        </form>
    </div>
</body>

</html>

