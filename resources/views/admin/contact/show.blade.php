@extends('main.app')

@section('title')
Pesan Masuk
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

    <div class="product-detail">
        <h1 class="product-detail__name">{{ $contact->subject }}</h1>
        <p class="product-detail__price">{{ $contact->name  }}</p>
        <p class="product-detail__description">No. Handphone {{ $contact->phone }}</p>
        <p class="product-detail__description">Status : {{ $contact->status == 0 ? 'Belum Selesai' : 'Selesai' }}</p>
        <p class="product-detail__description">{{ $contact->message }}</p>
        <p class="product-detail__description">
            <form action="{{ url('contacts/'.$contact->id)  }}" method="POST" style="display: inline;">
                {{ method_field('put') }}
                {{ csrf_field() }}
                <input
                    style="margin-top: 10px; padding: 8px;text-decoration: none;background-color: #4AA460; color: white; border-radius: 4px; display: inline-block;"
                    onclick="return confirm('Tandai selesai?')" type="submit" value="Tandai Selesai"
                    class="btn btn-danger">
            </form>
        </p>
    </div>
</div>
@endsection
