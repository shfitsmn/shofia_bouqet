@extends('layouts.dashboard.index')
@section('title', 'Semua Produk')
@section('isi')
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container mt-4">
    <h1>Semua Produk</h1>
    <div class="row">
        @foreach($produks as $produk)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="banner-item image-zoom-effect">
                <div class="image-holder">
                    <a href="#">
                        <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}"
                            class="img-fluid">
                    </a>
                </div>
                <div class="banner-content py-4">
                    <h5 class="element-title text-uppercase">
                        <a href="#" class="item-anchor">{{ $produk->nama }}</a>
                    </h5>
                    <p>{{ $produk->deskripsi }}</p>
                    <p class="text-success">Rp{{ number_format($produk->harga, 0, ',', '.') }}</p>
                    <div class="btn-left">
                        <form action="{{ route('pesanan.simpan', $produk->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary fs-6 text-uppercase text-decoration-none">Pesan
                                Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection