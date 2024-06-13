@extends('layout/layout')

@section('page-title', '登入')

@section('style')
    <link rel="stylesheet" href="{{ asset('/assets/css/auth.css') }}">
@endsection

@section('main-content')
    <div class="main-container">
        <form class="form" method="POST" action="{{ route("auth.playHandle") }}" id="playForm">
            @csrf
            <div class="flex-column center">
                <h1>開始遊戲</h1>
            </div>
            <div class="inputForm">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 32 32" height="20">
                    <g data-name="Layer 3" id="Layer_3">
                        <path
                            d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z">
                        </path>
                    </g>
                </svg>
                <input placeholder="帳號" class="input" type="text" name="cUsername">
            </div>
            <div class="fsub">
                <div class="captcha">
                    <div class="spinner">
                        <label>
                            <input type="checkbox" id="captchaCheck" name="cCaptcha">
                            <span class="checkmark"><span>&nbsp;</span></span>
                        </label>
                    </div>
                    <div class="text">
                        我不是機器人
                    </div>
                    <div class="logo">
                        <img src="{{ asset('/assets/img/recaptcha.png') }}" />
                        <p>reCAPTCHA</p>
                        <small>隱私權 - 條款</small>
                    </div>
                </div>
            </div>
            <button type="submit" class="button-submit">開始遊戲</button>
        </form>
    </div>
@endsection

@section("script")
<script src="{{ asset("assets/js/play.js") }}"></script>
<script>

</script>
@endsection
