<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>ユーザ登録</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <script src="{{asset('/js/script_plus.js')}}"></script>

</head>
<body>
<form name="registform" id="registform" action="/user-registration" method="post" class="form">
    {{csrf_field()}}
    <dl class="form-row">
        <dt class="w-100 d-inline"><label class="form-label">名前</label></dt>
        <dd><input type="text" name="name" class="form-control">
        <span class="alert-warning">{{$errors->first('name')}}</span></dd>
    </dl>
    <dl class="form-row">
        <dt class="w-100"><label class="form-label">メールアドレス</label></dt>
        <dd><input type="text" name="email" class="form-control">
            <span class="alert-warning">{{$errors->first('email')}}</span></dd>
    </dl>
    <dl class="form-row">
        <dt class="w-100"><label class="form-label">パスワード</label></dt>
        <dd><input type="text" name="password" class="form-control">
            <span class="alert-warning">{{$errors->first('password')}}</span></dd>
    </dl>
    <dl class="form-row">
        <dt class="w-100"><label class="form-label">パスワード（確認）</label></dt>
        <dd><input type="text" name="password_confirmation" class="form-control">
            <span class="alert-warning">{{$errors->first('password_confirmation')}}</span></dd>
    </dl>
    <button type="submit" name="action" value="send" class="btn-success">登録</button>
</form>
</body>
</html>