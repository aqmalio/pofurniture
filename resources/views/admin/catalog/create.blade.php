@extends('admin.layouts.app')

@section('title')
| Tambah Catalog
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Ups!</strong> Ada masalah/error dengan data yang kamu input
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('catalog.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Nama Barang</label>
                    <input required type="text" class="form-control" name="judul" placeholder="Nama Barang">
                </div>
                <div class="form-group">
                    <label for="">Upload Gambar</label>
                    <br>
                    <input required type="file" class="form-control-file" name="gambar">
                </div>
                <div class="form-group">
                    <label for="">Link File 3D (Opsional, Kosongkan jika tidak ada)</label>
                    <br>
                    <input type="text" class="form-control" name="model3d">
                </div>
                <div class="form-group">
                    <label for="">Harga Barang</label>
                    <input required type="number" class="form-control" name="harga" placeholder="harga Barang">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi Barang</label>
                    <textarea required name="deskripsi" rows="5" class="form-control"
                        placeholder="Desripsi Barang"></textarea>
                </div>

                <div class="row justify-content-between">
                    <div class="col">
                        <a class="btn btn-secondary btn-block" href="{{ url('admin/catalog') }}"
                            role="button">Kembali</a>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" value="Simpan">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
