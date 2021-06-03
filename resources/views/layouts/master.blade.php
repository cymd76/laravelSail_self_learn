<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <script src="{{asset('/js/script_plus.js')}}"></script>
    @yield('stylesheet')
    @yield('javascript')
</head>
<body>
    <div class="row justify-content-center">
        @yield('content')
    </div>
</body>
</html>
