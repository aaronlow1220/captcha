<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title') | 我不是機器人</title>
    <link rel="stylesheet" href="{{ asset('assets/css/init.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}">
    @yield('style')
</head>

<body>
    <div class="main-content">
        <div class="navbar-container">
            <label class="hamburger">
                <input type="checkbox">
                <svg viewBox="0 0 32 32">
                    <path class="line line-top-bottom"
                        d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22">
                    </path>
                    <path class="line" d="M7 16 27 16"></path>
                </svg>
            </label>
            <div class="navbar-menu">
                <div class="navbar-content">
                    <a class="navbar-item" href="{{ route('pages.home') }}">首頁</a>
                    <a class="navbar-item" href="">展場介紹</a>
                    <a class="navbar-item" href="{{ route('pages.photos') }}">我的照片</a>
                </div>
                <div class="navbar-content">
                    <a class="filled-btn" href="{{ route('pages.login') }}">登入</a>
                </div>
            </div>

        </div>
        @yield('main-content')
    </div>
</body>

</html>
