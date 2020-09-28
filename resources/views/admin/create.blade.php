@extends('admin.layouts.aap')

@section('content')
    <div class="container"> 
        {{-- {{ route('') }} --}}
        <form action="{{ route('savegambar') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="">Nama Barang</label>
                <input type="text" class="form-control" name="judul" placeholder="Nama Barang">
            </div>
            <div class="form-group">
                <label for="">Upload Gambar</label> 
                <br>
                <input type="file" name="gambar">
            </div>
            <div class="form-group">
                <label for="">Harga Barang</label>
                <input type="text" class="form-control" name="harga" placeholder="harga Barang"> 
            </div>
            <div class="form-group">
                <label for="">Deskripsi Barang</label>
                <textarea name="deskripsi" rows="5" class="form-control"  placeholder="Desripsi Barang"></textarea>
            </div>
            <div class="form-group">
                <input type="submit"  class="btn btn-primary" value="save">
            </div>
        
        </form>
    </div>   
@endsection