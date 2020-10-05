@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($blogs as $blog)
                    <div class="card">
                        <div class="card-header">
                            <h2><a href="blog/{{$blog->slug}}">{{ $blog->judul }}</a></h2>  
                        </div>

                        <div class="card-body">
                            <p>
                                {{ $blog->konten }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    
@endsection