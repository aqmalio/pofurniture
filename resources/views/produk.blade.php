@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <form action="/produk" method="GET">
                    <input type="text" name="cari" placeholder="Cari produk..." value="{{ old('cari') }}">
                    <input type="submit" class="btn btn-info" value="CARI">
                </form> 

                @foreach ($produks as $produk)
                    <div class="card">
                        <div class="card-header">
                            <h2><a href="produk/{{$produk->slug}}">{{ $produk->judul }}</a></h2> 
                        </div>

        
                        <div class="card-body">
                            <p>
                                <img src="{{ asset('uploads/gambar/' . $produk->gambar ) }}" width="120px" height="120px" alt="image">
                            </p>

                            <h4> Rp.{{ $produk->harga }}</h4>

                            <p>
                                {{ $produk->deskripsi }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    
@endsection