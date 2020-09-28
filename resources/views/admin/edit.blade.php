@extends('admin.layouts.app')

@section('content')
    <div class="container"> 
        <div class="row justify-content-center">
            
                <div class="col-md-8">
                    <div class="card-header">Edit Data</div>

                    <div class="card-body">

                        <form action="/updateproduk/{{ $produks->id }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <input type="hidden" name="id" id="id " value="{{ $produks->id }}">


                            <div class="form-group">
                                <label for="">Title
                                    <h1></h1>
                                </label>
                                <input type="text" class="form-control" name="judul" placeholder="Post title" value="{{$produks->judul}}">
                            </div>
                            
                            <div class="form-group">
                                <label for="">Upload Gambar</label> 
                                <br>
                                <input type="file" name="gambar" value="{{$produks->gambar}}">
                            </div>

                            <div class="form-group">
                                <label for="">Title
                                    <h1></h1>
                                </label>
                                <input type="text" class="form-control" name="harga" placeholder="Post title" value="{{$produks->harga}}">
                            </div>

                
                            <div class="form-group">
                                <label for="">content</label>
                                <textarea name="deskripsi" rows="5" class="form-control"  placeholder="Post content"> {{ $produks->deskripsi }}</textarea>
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
