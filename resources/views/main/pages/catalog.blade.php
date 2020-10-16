@php
use Illuminate\Support\Str;
@endphp
@extends('main.app')

@section('title')
Catalog
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('css/custom/reset.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom/catalog.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom/paginate.css') }}">
@endsection

@section('content')
@include('main.partials.navbar')

<form action="/catalog" class="searchbar" autocomplete="off" method="GET">
    <input type="text" class="searchbar__input" placeholder="Cari Produk...." name="cari" value="{{ old('cari') }}">
</form>

<div class="container">
    @foreach ($produks as $produk)
    <div data-aos="fade-right" class="card cf">
        <div class="card__head">
            <p class="card__title">{{ $produk->judul }}</p>
        </div>

        <img src="{{ asset('img/upload/'.$produk->gambar)  }}" loading="lazy" class="card__image" alt="image">



        <div class="card__description">
            {{  Str::of($produk->deskripsi)->limit(30)  }}
        </div>

        <div class="card__footer">
            <a href="{{ url('catalog/'.$produk->slug) }}" class="card__detail-btn">Detail Produk &#8594;</a>
        </div>
    </div>
    @endforeach
    <div class="pagination justify-content-center">
      {{$produks->links()}}
    </div>
</div>

@endsection

@section('script')
<script src="{{ asset('js/custom/navbar.js') }}"></script>
<script src="{{ asset('js/custom/searchbar.js') }}"></script>
<script src="{{ asset('js/custom/change-theme.js') }}"></script>
@endsection
