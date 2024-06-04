@extends('layout/layout')

@section('page-title', '首頁')

@section('style')
    <link rel="stylesheet" href="{{ asset('/assets/css/photos.css') }}">
@endsection

@section('main-content')
    <div class="main-container">
        <h1 class="photo-txt">我的照片</h1>
        @if ($photos->isEmpty())
            <h2 class="no-photo">你還沒有照片哦，給我來玩！</h2>
        @endif
        <div class="card-container">
            @foreach ($photos as $photo)
                <div class="card">
                    <div class="card-title">
                        <h2>
                            第{{ $loop->index + 1 }}輪
                        </h2>
                        <p>{{ date('Y-m-d H:i', strtotime($photo->created_at)) }}</p>
                    </div>
                    <div class="card-img">
                        <img src="{{ $photo->photo }}" alt="">
                        {{-- <img src="{{ asset('/assets/img/user.jpg') }}" alt=""> --}}
                    </div>
                    <div class="card-btn">
                        <a class="btn no-deco" href="{{ $photo->photo }}" download>
                            下載
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
