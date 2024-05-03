@extends("layout/layout")

@section("page-title", "首頁")

@section("style")
    <link rel="stylesheet" href="{{ asset("/assets/css/home.css") }}">
@endsection

@section('main-content')
<div class="main-container">
    <div class="main-card">
        <h1 class="main-text">
            我不是機器人
        </h1>
        <img src="{{asset("/assets/img/cover.jpeg")}}" alt="">
    </div>
</div>
@endsection