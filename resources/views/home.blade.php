<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>home</title>
</head>
<body>
    <p>Home of laravel_docker.</p>
@if (Auth::check())
{{--    {{\Auth::user()->name}}--}}
    <p><a href="/logout">ログアウト</a></p>
@else
    <p><a href="/login">ログイン</a></p>
    <p><a href="/user-registartion">ユーザ登録</a></p>
@endif
</body>
</html>
