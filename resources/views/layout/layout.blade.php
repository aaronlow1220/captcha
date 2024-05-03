<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title') | 我不是機器人</title>
    <link rel="stylesheet" href="{{ asset('assets/css/init.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}">
    @yield("style")
</head>

<body>
    <div class="main-content">
        <div class="navbar-container">
            <div class="navbar-content">
                <a class="navbar-item" href="{{ route("pages.home") }}">首頁</a>
                <a class="navbar-item" href="">展場介紹</a>
                <a class="navbar-item" href="">我的照片</a>
            </div>
            <div class="navbar-content">
                <a class="filled-btn" href="{{ route("pages.login") }}">登入</a>
            </div>
        </div>
        @yield('main-content')
    </div>
</body>

</html>
