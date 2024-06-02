@extends("layout/layout")

@section("page-title", "首頁")

@section("style")
    <link rel="stylesheet" href="{{ asset("/assets/css/home.css") }}">
@endsection

@section('main-content')
<div class="main-container">
    <div class="main-card">
        <div class="main-text">
            <h1>我不是機器人</h1>
            <p>以Captcha為創作概念所製作的互動裝置</p>
        </div>
        <img src="{{asset("/assets/img/cover.jpg")}}" alt="">
    </div>
</div>
@endsection