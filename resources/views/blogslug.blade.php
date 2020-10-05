@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <input type="hidden" name="{{ $blogs->slug }}" id="{{ $blogs->slug }} " value="{{ $blogs->slug }}">
                {{-- @foreach ($blogs as $blog) --}}
                    <div class="card">
                        <div class="card-header">
                            <h2>{{ $blogs->judul }}</h2>  
                        </div>

                        <div class="card-body">
                            <p>
                                {{ $blogs->konten }}
                            </p>
                        </div>
                    </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>

    
@endsection