@extends('admin.layouts.aap')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($blogs as $blog)
                    <div class="card">
                        <div class="card-header">
                            <h2 >{{ $blog->judul }}</h2> 
                            
                            <a href="/editblog/{{ $blog->id }}" class="btn btn-xs btn-success">EDIT</a>
                            <a href="/deleteblog/{{ $blog->id }}" class="btn btn-xs btn-danger">HAPUS</a>
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