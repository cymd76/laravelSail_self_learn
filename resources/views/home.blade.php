@extends('layouts.master')
@section('title', 'Home')
@section('stylesheet')
@endsection
@section('javascript')
@endsection
@section('content')
    <p class="justify-content-center">Home of laravel_docker.</p>
@if (Auth::check())
{{--    {{\Auth::user()->name}}--}}
    <p class="row"><a href="/logout">ログアウト</a></p>
@else
    <p class="row"><a href="/login">ログイン</a></p>
    <p class="row"><a href="/user-registration">ユーザ登録</a></p>
@endif
@endsection
