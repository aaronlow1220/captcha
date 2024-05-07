@extends('layout/layout')

@section('page-title', '首頁')

@section('style')
    <link rel="stylesheet" href="{{ asset('/assets/css/photos.css') }}">
@endsection

@section('main-content')
    <div class="main-container">
        <div class="card-container">
            <div class="card">
                <div class="card-title">
                    <h2>
                        Game 1
                    </h2>
                </div>
                <div class="card-img">
                    <img src="{{ asset('/assets/img/user.jpg') }}" alt="">
                </div>
                <div class="card-btn">
                    <a class="btn no-deco" href="">
                        Download
                    </a>
                </div>
            </div>
            
        </div>
    </div>
@endsection
