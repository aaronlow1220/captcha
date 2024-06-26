@extends('layout/layout')

@section('page-title', '註冊')

@section('style')
    <link rel="stylesheet" href="{{ asset('/assets/css/auth.css') }}">
@endsection

@section('script')
    <script src="{{ asset('/assets/js/register.js') }}"></script>
@endsection

@section('main-content')
    <div class="main-container">
        <form class="form" id="regForm" method="POST" action="{{ route('auth.registerHandle') }}">
            @csrf
            <div class="flex-column center">
                <h1>註冊帳號</h1>
            </div>
            <div class="inputForm">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    >
                    <path
                        d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Z" />
                </svg>
                <input placeholder="使用者名稱" class="input" type="text" name="cUsername">
            </div>
            <div class="inputForm">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 32 32" height="20">
                    <g data-name="Layer 3" id="Layer_3">
                        <path
                            d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z">
                        </path>
                    </g>
                </svg>
                <input placeholder="電郵地址" class="input" type="text" name="cEmail">
            </div>
            <div class="inputForm">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="-64 0 512 512" height="20">
                    <path
                        d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0">
                    </path>
                    <path
                        d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0">
                    </path>
                </svg>
                <input placeholder="密碼" class="input" type="password" name="cPassword">
            </div>
            {{-- <div class="flex-column">
                <label>確認密碼</label>
            </div> --}}
            <div class="inputForm">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="-64 0 512 512" height="20">
                    <path
                        d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0">
                    </path>
                    <path
                        d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0">
                    </path>
                </svg>
                <input placeholder="確認密碼" class="input" type="password" name="cConfirmPassword">
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
            <button class="button-submit">註冊帳號</button>
            <p class="p">
                已經有帳號？
                <a class="no-deco" href="{{ route('pages.login') }}"><span class="span">立即登入</span></a>
            </p>
        </form>
    </div>
@endsection
