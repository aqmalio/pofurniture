@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <input type="hidden" name="{{ $produks->slug }}" id="{{ $produks->slug }} " value="{{ $produks->slug }}">
                
                <div class="card-header">
                    <h2>{{ $produks->judul }}</h2>  
                </div>


                <div class="card-body">
                    <p>
                        <img src="{{ asset('uploads/gambar/' . $produks->gambar ) }}" width="120px" height="120px" alt="image">
                    </p>

                    <h4> Rp.{{ $produks->harga }}</h4>

                    <p>
                        {{ $produks->deskripsi }}
                    </p>
                </div>

            </div>
        </div>
    </div>

    
@endsection