@extends('layout/layout')

@section('page-title', '登入')

@section('style')
    <link rel="stylesheet" href="{{ asset('/assets/css/auth.css') }}">
    <style>
        #qrcode{
            display: flex;
            justify-content: center;
        }
    </style>
@endsection

@section('main-content')
    <div class="main-container">
        <form class="form" method="POST" action="{{ route('auth.playHandle') }}" id="playForm">
            @csrf
            <div class="flex-column center">
                <h1>你好，{{ $user->username }}</h1>
            </div>
            <div class="qrcode" id="qrcode">

            </div>
            <button type="submit" class="button-submit">開始遊戲</button>
        </form>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/davidshimjs-qrcodejs-04f46c6/qrcode.min.js') }}"></script>
    <script>
        let uuid = "{{ route('pages.authenticate', ['userid'=>$user->uuid]) }}";
        console.log(uuid);
        var qrcode = new QRCode("qrcode", uuid
        );
    </script>
@endsection
