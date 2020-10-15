@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <form action="{{ url('/admin/blog/edit/'.$blog->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group">
                <label for="">Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{ $blog->judul }}">
            </div>
            <div class="form-group">
                <label for="">Konten</label>
                <textarea name="konten" rows="10" class="form-control"  placeholder="konten">{{ $blog->konten }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit"  class="btn btn-primary" value="Simpan">
            </div>

        </form>
    </div>
@endsection
