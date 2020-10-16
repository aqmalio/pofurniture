@extends('main.app')

@section('title')
Blog
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('css/custom/reset.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom/blog.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom/paginate.css') }}">
@endsection

@section('content')
@include('main.partials.navbar')

<form action="/blog" class="searchbar" method="GET">
    <input type="text" class="searchbar__input" placeholder="Cari Artikel...." name="cari" value="{{ old('cari') }}">
</form>

<div class="container">
    @foreach ($blogs as $blog)
    <div data-aos="fade-right" class="article">
        <a href="{{ url('blog/'.$blog->slug) }}" class="article__title">{{ $blog->judul }}</a>
        <p class="article__published">{{ TanggalIndonesia($blog->created_at) }}</p>
    </div>
    @endforeach
    <div class="pagination justify-content-center">
      {{$blogs->links()}}
    </div>

</div>

@endsection

@section('script')
<script src="{{ asset('js/custom/navbar.js') }}"></script>
<script src="{{ asset('js/custom/searchbar.js') }}"></script>
<script src="{{ asset('js/custom/change-theme.js') }}"></script>
@endsection
