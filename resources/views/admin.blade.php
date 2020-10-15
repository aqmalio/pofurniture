@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row">
                        <div class="col">
                            <a class="btn btn-primary btn-block" href="{{ url('/admin/catalog') }}" role="button">Kelola
                                Catalog</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-secondary btn-block" href="{{ url('/admin/blog') }}" role="button">Kelola
                                Blog</a>
                        </div>
                        <div class="col">
                            <a class="btn btn-success btn-block" href="{{ url('/contacts') }}" role="button">Pesan
                                Masuk</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
