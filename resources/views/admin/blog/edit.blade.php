@extends('admin.layouts.app')

@section('content')
    <div class="container"> 
        <div class="row justify-content-center">
            
                <div class="col-md-8">
                    <div class="card-header">Edit Data</div>

                    <div class="card-body">

                        <form action="/updateblog/{{ $blogs->id }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <input type="hidden" name="id" id="id " value="{{ $blogs->id }}">


                            <div class="form-group">
                                <label for="">Title
                                    <h1></h1>
                                </label>
                                <input type="text" class="form-control" name="judul" placeholder="blog title" value="{{$blogs->judul}}">
                            </div>
                                            
                            <div class="form-group">
                                <label for="">content</label>
                                <textarea name="konten" rows="10" class="form-control"  placeholder="Post content"> {{ $blogs->konten }}</textarea>
                            </div>
                
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary" value="save">
                            </div>
                        </form>
                    </div>
                </div>
            
             
        </div>
    </div>   
@endsection
