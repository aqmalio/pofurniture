@extends('main.app')

@section('title')
{{ $produk->judul }}
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('css/custom/reset.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom/catalog-detail.css') }}">
@endsection

@section('content')
<div class="catalog-btn">
    <a href="{{ url()->previous() }}" class="catalog-btn__back">&#10229; Kembali</a>
</div>

<div class="container">
    <input type="hidden" name="{{ $produk->slug }}" id="{{ $produk->slug }} " value="{{ $produk->slug }}">

    <div class="product-image">
        <img src="{{ asset('img/upload/'.$produk->gambar) }}" loading="lazy" class="product-image__image" alt="product">
    </div>

    <div class="product-detail">
        <h1 class="product-detail__name">{{ $produk->judul }}</h1>
        <p class="product-detail__price">Rp.{{ number_format($produk->harga,2,',','.') }}</p>
        <p class="product-detail__description">{{ $produk->deskripsi }}</p>
        <p class="product-detail__description">
            <a href="{{ url('/#contact') }}"
                style="margin-top: 10px; padding: 8px;text-decoration: none;background-color: #217DC7; color: white; border-radius: 4px; display: inline-block;">Pesan
                Sekarang</a>
        </p>
    </div>

    <div class="product-model">
        <h1 class="product-model__title">Preview 3D</h1>

        <model-viewer src="{{ $produk->model3d }}" ar ar-modes="webxr scene-viewer quick-look" ar-scale="auto"
            auto-rotate camera-controls>
        </model-viewer>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/custom/navbar.js') }}"></script>
<script src="{{ asset('js/custom/searchbar.js') }}"></script>
<script src="{{ asset('js/custom/change-theme.js') }}"></script>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
@endsection
