@extends('admin.layouts.app')


@section('title')
| Pesan Masuk
@endsection

@section('style')
<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container">

    <a href="{{ url('/admin') }}" class="btn btn-secondary mb-5">Kembali</a>

    <table id="datatable" class="table w-100">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengirim</th>
                <th>No. Handphone</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td> {{ $loop->iteration }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->status == 0 ? 'Belum Selesai' : 'Selesai' }}</td>
                <td>
                    <a href="{{ url('contacts/'.$contact->id) }}" class="btn btn-success">Baca</a>
                    <form action="{{ url('contacts/'.$contact->id)  }}" method="POST" style="display: inline;">
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
