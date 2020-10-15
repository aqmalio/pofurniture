@extends('admin.layouts.app')


@section('title')
| Blog
@endsection

@section('style')
<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container">

    <a href="{{ url('/admin') }}" class="btn btn-secondary mb-5">Kembali</a>
    <a href="{{ url('/admin/blog/create') }}" class="btn btn-primary mb-5">Tambah Artikel</a>

    <table id="datatable" class="table w-100">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <td> {{ $loop->iteration }}</td>
                <td>{{ $blog->judul }}</td>
                <td>
                    <a href="{{ url('blog/'.$blog->slug) }}" class="btn btn-primary">Detail</a>
                    <a href="{{ url('admin/blog/edit/'.$blog->id) }}" class="btn btn-secondary ml-2 mr-2">Edit</a>
                    <form action="{{ url('admin/blog/delete/'.$blog->id)  }}" method="POST" style="display: inline;">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input onclick="return confirm('Hapus data ini?')" type="submit" value="Hapus"
                            class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
        $('#datatable').DataTable({
            responsive: true
        });
    } );
</script>

@endsection
