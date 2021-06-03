@extends('layouts.master')
@section('title', 'ログイン')
@section('stylesheet')
@endsection
@section('javascript')
@endsection
@section('content')
<div class="col-lg-8 col-xl-7">
@isset($error)
    <p class="alert-danger">{{$errors->first('message')}}</p>
@endisset
    <form name="loginform" id="loginform" action="/login" method="post" class="form">
        {{csrf_field()}}
        <dl class="form-floating">
            <dt class="w-100"><label class="form-label">メールアドレス</label></dt>
            <dd><input type="text" name="email" class="form-control form-text"></dd>
        </dl>
        <dl class="form-floating">
            <dt class="w-100"><label class="form-label">パスワード</label></dt>
            <dd><input type="text" name="password" class="form-control"></dd>
        </dl>
        <button type="submit" name="action" value="send" class="btn-success">ログイン</button>
    </form>
</div>
@endsection
