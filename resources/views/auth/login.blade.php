<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>ログイン</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <script src="{{asset('/js/script_plus.js')}}"></script>

</head>
<body>
@isset($error)
    <p class="alert-danger">{{$errors->first('message')}}</p>
@endisset
<form name="loginform" id="loginform" action="/login" method="post" class="form">
    {{csrf_field()}}
    <dl class="form-row">
        <dt class="w-100"><label class="form-label">メールアドレス</label></dt>
        <dd><input type="text" name="email" class="form-control"></dd>
    </dl>
    <dl class="form-row">
        <dt class="w-100"><label class="form-label">パスワード</label></dt>
        <dd><input type="text" name="password" class="form-control"></dd>
    </dl>
    <button type="submit" name="action" value="send" class="btn-success">ログイン</button>
</form>
</body>
</html>
