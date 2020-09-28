@extends('.adminlayouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($produks as $produk)
                    <div class="card">
                        <div class="card-header">
                            <h2>{{ $produk->judul }}</h2>  
                        </div>

                        <form class="" action="" method="post">
                            {{ csrf_field(  ) }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-xs btn-danger">Hapus</button>
                        </form>
        
                        <div class="card-body">
                            <p>
                                <img src="{{ asset('uploads/gambar/' . $produk->gambar ) }}" width="120px" height="120px" alt="image">
                            </p>

                            <h4> Rp.{{ $produk->harga }}</h4>

                            <p>
                                {{ $produk->deskripsi }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    
@endsection