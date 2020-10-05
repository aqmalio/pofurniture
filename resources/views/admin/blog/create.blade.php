@extends('admin.layouts.aap')

@section('content')
    <div class="container"> 
        {{-- {{ route('') }} --}}
        <form action="{{ route('saveblog') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="">Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Judul">
            </div>
            <div class="form-group">
                <label for="">Deskripsi Barang</label>
                <textarea name="konten" rows="10" class="form-control"  placeholder="konten"></textarea>
            </div>
            <div class="form-group">
                <input type="submit"  class="btn btn-primary" value="save">
            </div>
        
        </form>
    </div>   
@endsection