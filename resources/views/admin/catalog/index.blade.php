@extends('admin.layouts.app')


@section('title')
| Catalog
@endsection

@section('style')
<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container">

    <a href="{{ url('/admin') }}" class="btn btn-secondary mb-5">Kembali</a>
    <a href="{{ url('/admin/catalog/create') }}" class="btn btn-primary mb-5">Tambah Katalog</a>

    <table id="datatable" class="table w-100">
        <thead>
            <tr>
                <th>No</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
            <tr>
                <td> {{ $loop->iteration }}</td>
                <td>{{ $produk->judul }}</td>
                <td>{{ $produk->harga }}</td>
                <td>
                    <a href="{{ url('catalog/'.$produk->slug) }}" class="btn btn-primary">Detail</a>
                    <a href="{{ url('admin/catalog/edit/'.$produk->id) }}" class="btn btn-secondary ml-2 mr-2">Edit</a>
                    <form action="{{ url('admin/catalog/delete/'.$produk->id)  }}" method="POST" style="display: inline;">
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
