@extends('main.app')

@section('title')
{{ $blog->judul }}
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('css/custom/reset.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom/blog-detail.css') }}">
@endsection

@section('content')
<div class="button-blog">
    <a href="{{ url()->previous() }}" class="button-blog__back">&#10229; Kembali</a>
</div>

<div class="container">

    <input type="hidden" name="{{ $blog->slug }}" id="{{ $blog->slug }}" value="{{ $blog->slug }}">

    <div class="article">
        <div class="article__head">
            <h1 class="article-head__title">{{ $blog->judul }}</h1>
            <p class="article-head__date">{{ TanggalIndonesia($blog->created_at) }}</p>
        </div>

        <div class="article__body">
            <p>{{ $blog->konten }}</p>
        </div>
    </div>
</div>
@endsection
